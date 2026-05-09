<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use App\Models\JurnalSiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class JurnalSiswaController extends Controller
{
    // ================= LIST =================
    public function index(Request $request)
    {
        $query = JurnalSiswa::where('user_id', Auth::id());

        if ($request->filled('search_date')) {
            $query->whereDate('tanggal', $request->search_date);
        }

        $jurnal = $query->orderBy('tanggal', 'desc')->get();

        return view('Siswa.jurnal_list', compact('jurnal'));
    }

    // ================= FORM =================
    public function create()
    {
        $biodata = BiodataSiswa::where('user_id', Auth::id())->first();
        return view('Siswa.jurnal', compact('biodata'));
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $today = Carbon::today()->toDateString();

        // VALIDASI
        $validatedData = $request->validate([
            'tanggal' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($today) {
                    if ($value !== $today) {
                        $fail('Jurnal hanya bisa diisi untuk hari ini.');
                    }
                },
            ],
            'materi' => 'required|max:700',
            'tugas' => 'required|max:500',
            'foto_kegiatan' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // CEK DOUBLE INPUT
        $sudahIsi = JurnalSiswa::where('user_id', Auth::id())
            ->whereDate('tanggal', $today)
            ->exists();

        if ($sudahIsi) {
            return back()->withErrors([
                'tanggal' => 'Kamu sudah mengisi jurnal hari ini.'
            ])->withInput();
        }

        // AMBIL BIODATA
        $biodata = BiodataSiswa::where('user_id', Auth::id())->first();

        if (!$biodata) {
            return back()->withErrors([
                'tanggal' => 'Silakan isi biodata terlebih dahulu.'
            ]);
        }

        $validatedData['nama'] = $biodata->nama;
        $validatedData['jurusan'] = $biodata->jurusan;
        $validatedData['user_id'] = Auth::id();

        // ================= KOMPRES GAMBAR =================
        if ($request->hasFile('foto_kegiatan')) {

            $manager = new ImageManager(new Driver());
            $image = $request->file('foto_kegiatan');

            $img = $manager->read($image)
                ->scale(width: 800)
                ->toJpeg(60);

            $filename = 'foto_siswa/' . uniqid() . '.jpg';

            Storage::disk('public')->put($filename, $img);

            $validatedData['foto_kegiatan'] = $filename;
        }

        // SIMPAN
        JurnalSiswa::create($validatedData);

        return redirect()->route('jurnal.list')
            ->with('success', 'Jurnal berhasil disimpan.');
    }

    // ================= DOWNLOAD PDF =================
    public function download($id)
    {
        $biodata = BiodataSiswa::where('user_id', Auth::id())->first();

        $data = JurnalSiswa::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // KOMPRES FOTO UNTUK PDF
        if (!empty($data->foto_kegiatan)) {
            $path = storage_path("app/public/{$data->foto_kegiatan}");

            if (file_exists($path)) {
                $manager = new ImageManager(new Driver());

                $img = $manager->read($path)
                    ->scale(width: 800)
                    ->toJpeg(60);

                $data->foto_base64 = "data:image/jpeg;base64," . base64_encode($img);
            }
        }

        $pdf = Pdf::loadView('Siswa.jurnal_pdf', compact('data', 'biodata'))
            ->setOptions([
                'dpi' => 72,
                'defaultFont' => 'Times-Roman',
            ]);

        return $pdf->download('jurnal_' . $data->tanggal . '.pdf');
    }
}