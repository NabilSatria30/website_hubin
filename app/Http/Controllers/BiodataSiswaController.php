<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class BiodataSiswaController extends Controller
{
    /**
     * Dashboard siswa
     */
    public function index()
    {
        $biodata = BiodataSiswa::where('user_id', Auth::id())->first();

        return view('Siswa.dashboard_siswa', compact('biodata'));
    }

    /**
     * Form biodata
     */
    public function create()
    {
        $perusahaan = Perusahaan::all();
        return view('Siswa.biodata', compact('perusahaan'));
    }

    /**
     * Simpan biodata
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'jurusan' => 'required|max:50',
            'kelas' => 'required|max:100',
            'alamat' => 'required|max:300',
            'no_telp' => 'required|max:100',
            'email' => 'required|email|max:100',
            'tgl_mulai_pkl' => 'required|date',
            'tgl_selesai_pkl' => 'required|date',
            'perusahaan_id' => 'required|exists:perusahaans,id',
            'divisi' => 'required|max:100',
            'pembimbing_sekolah' => 'required|max:50',
            'pembimbing_perusahaan' => 'required|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120'
        ]);

        // Tambahkan user id
        $validatedData['user_id'] = Auth::id();

        /**
         * Upload dan kompres foto
         */
        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFile = time() . '.jpg';

            $image = Image::read($file)
                ->scale(width: 800) // resize max width 800px
                ->toJpeg(60); // kompres kualitas 60%

            Storage::disk('public')->put(
                'foto_siswa/' . $namaFile,
                (string) $image
            );

            $validatedData['foto'] = $namaFile;
        }

        BiodataSiswa::create($validatedData);

        return redirect()->route('dashboard_siswa');
    }
}