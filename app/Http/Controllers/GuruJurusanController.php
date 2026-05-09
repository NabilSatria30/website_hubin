<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruJurusanController extends Controller
{

    // ==============================
    // DASHBOARD GURU
    // ==============================
    public function index()
    {
        $user = Auth::user();
        return view('GuruJurusan.dashboard_gurujurusan', compact('user'));
    }


    // ==============================
    // BIODATA SISWA (FIX + PERUSAHAAN)
    // ==============================
    public function biodata(Request $request)
    {
        $guru = Auth::user();
        $search = $request->search;

        $data = BiodataSiswa::with('perusahaan')
            ->where('jurusan', $guru->jurusan)
            ->when($search, function ($q) use ($search) {
                $q->where(function($q2) use ($search){
                    $q2->where('nama', 'like', "%$search%")
                       ->orWhere('kelas', 'like', "%$search%")
                       ->orWhereHas('perusahaan', function($q3) use ($search){
                           $q3->where('nama', 'like', "%$search%");
                       });
                });
            })
            ->get();

        return view('GuruJurusan.biodata_siswa', compact('data', 'search'));
    }


    // ==============================
    // FUNCTION UTAMA (JURNAL TERBARU)
    // ==============================
    private function getDataJurnal($jurusan, $search)
    {
        return DB::table('jurnal_siswas as j')
            ->join('biodata_siswas as b', 'j.user_id', '=', 'b.user_id')
            ->leftJoin('perusahaans as p', 'b.perusahaan_id', '=', 'p.id')

            ->join(DB::raw('(
                SELECT user_id, MAX(id) as max_id 
                FROM jurnal_siswas 
                GROUP BY user_id
            ) as latest'), 'j.id', '=', 'latest.max_id')

            ->where('j.jurusan', $jurusan)

            ->select(
                'j.user_id',
                'b.nama',
                'b.kelas',
                'p.nama as perusahaan'
            )

            ->when($search, function ($q) use ($search) {
                $q->where(function($q2) use ($search){
                    $q2->where('b.nama', 'like', "%$search%")
                       ->orWhere('b.kelas', 'like', "%$search%")
                       ->orWhere('p.nama', 'like', "%$search%");
                });
            })

            ->get();
    }


    // ==============================
    // JURNAL SISWA
    // ==============================
    public function jurnal(Request $request)
    {
        $guru = Auth::user();
        $jurusan = $guru->jurusan;
        $search = $request->search;

        $data = $this->getDataJurnal($jurusan, $search);

        return view('GuruJurusan.jurnal_siswa', compact('data', 'search', 'jurusan'));
    }


    // ==============================
    // DETAIL JURNAL
    // ==============================
    public function detailJurnal($user_id)
    {
        $guru = Auth::user();

        $cek = DB::table('jurnal_siswas as j')
            ->where('j.user_id', $user_id)
            ->where('j.jurusan', $guru->jurusan)
            ->first();

        if (!$cek) {
            abort(403, 'Anda tidak boleh melihat jurnal jurusan lain.');
        }

        $data = DB::table('jurnal_siswas as j')
            ->join('biodata_siswas as b', 'j.user_id', '=', 'b.user_id')
            ->leftJoin('perusahaans as p', 'b.perusahaan_id', '=', 'p.id')
            ->where('j.user_id', $user_id)
            ->select('j.*', 'b.nama', 'b.jurusan', 'p.nama as perusahaan')
            ->get();

        if ($data->isEmpty()) {
            abort(404, 'Jurnal siswa belum tersedia.');
        }

        $nama = $data->first()->nama;
        $jurusan = $data->first()->jurusan;

        return view('GuruJurusan.detail_jurnal_guru', compact('data', 'nama', 'jurusan'));
    }
}