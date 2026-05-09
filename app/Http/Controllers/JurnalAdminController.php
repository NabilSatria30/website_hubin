<?php

namespace App\Http\Controllers;

use App\Models\JurnalSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurnalAdminController extends Controller
{

private function getDataJurnal($jurusan, $search)
{
    return DB::table('jurnal_siswas as j')
        ->join('biodata_siswas as b', 'j.user_id', '=', 'b.user_id')

        ->join(DB::raw('(
            SELECT user_id, MAX(id) as max_id 
            FROM jurnal_siswas 
            GROUP BY user_id
        ) as latest'), 'j.id', '=', 'latest.max_id')

        ->where('j.jurusan', $jurusan)

        // 🔥 ambil dari biodata, bukan jurnal
        ->select('j.user_id', 'b.nama', 'b.kelas')

        ->when($search, function ($q) use ($search) {
            $q->where(function($q2) use ($search){
                $q2->where('b.nama', 'like', "%$search%")
                   ->orWhere('b.kelas', 'like', "%$search%");
            });
        })

        ->get();
}


/* ================== RPL ================== */
public function rpl(Request $request)
{
    $search = $request->search;

    $data = $this->getDataJurnal('Rekayasa Perangkat Lunak', $search);

    return view('Admin.hasil_jurnal_rpl', compact('data', 'search'));
}


/* ================== DKV ================== */
public function dkv(Request $request)
{
    $search = $request->search;

    $data = $this->getDataJurnal('Desain Komunikasi Visual', $search);

    return view('Admin.hasil_jurnal_dkv', compact('data', 'search'));
}


/* ================== SIJA ================== */
public function sija(Request $request)
{
    $search = $request->search;

    $data = $this->getDataJurnal('Sistem Informasi Jaringan Dan Aplikasi', $search);

    return view('Admin.hasil_jurnal_sija', compact('data', 'search'));
}


/* ================== TKJ ================== */
public function tkj(Request $request)
{
    $search = $request->search;

    $data = $this->getDataJurnal('Teknik Komputer Dan Jaringan', $search);

    return view('Admin.hasil_jurnal_tkj', compact('data', 'search'));
}


public function detail($user_id)
{
    // ambil jurnal siswa
    $data = JurnalSiswa::where('user_id', $user_id)->get();

    if ($data->isEmpty()) {
        abort(404, 'Jurnal tidak ditemukan');
    }

    // AMBIL DARI BIODATA
    $biodata = \App\Models\BiodataSiswa::where('user_id', $user_id)->first();

    $nama = $biodata->nama ?? '-';
    $jurusan = $biodata->jurusan ?? '-';

    return view('Admin.detail_jurnal', compact('data', 'nama', 'jurusan'));
}


/* ================== JSON ================== */
public function showJson($id)
{
    $jurnal = JurnalSiswa::findOrFail($id);

    // ambil biodata terbaru
    $biodata = \App\Models\BiodataSiswa::where('user_id', $jurnal->user_id)->first();

    return response()->json([
        'nama' => $biodata->nama ?? '-', 
        'jurusan' => $biodata->jurusan ?? '-',
        'tanggal' => $jurnal->tanggal,
        'materi' => $jurnal->materi,
        'tugas' => $jurnal->tugas,
        'foto_kegiatan' => $jurnal->foto_kegiatan,
    ]);
}

}