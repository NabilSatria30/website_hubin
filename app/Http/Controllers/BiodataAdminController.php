<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use Illuminate\Http\Request;

class BiodataAdminController extends Controller
{
    // =====================================================
    // RPL
    // =====================================================
    public function rpl(Request $request)
    {
        $search = $request->search;

        $data = BiodataSiswa::with('perusahaan')
            ->where('jurusan', 'Rekayasa Perangkat Lunak')
            ->when($search, function ($q) use ($search) {
                $q->where(function($query) use ($search) {
                    $query->where('nama', 'like', "%$search%")
                          ->orWhere('kelas', 'like', "%$search%")
                          ->orWhereHas('perusahaan', function($q2) use ($search) {
                              $q2->where('nama', 'like', "%$search%");
                          });
                });
            })
            ->get();

        return view('Admin.hasil_biodata_rpl', compact('data', 'search'));
    }

    // =====================================================
    // DKV
    // =====================================================
    public function dkv(Request $request)
    {
        $search = $request->search;

        $data = BiodataSiswa::with('perusahaan')
            ->where('jurusan', 'Desain Komunikasi Visual')
            ->when($search, function ($q) use ($search) {
                $q->where(function($query) use ($search) {
                    $query->where('nama', 'like', "%$search%")
                          ->orWhere('kelas', 'like', "%$search%")
                          ->orWhereHas('perusahaan', function($q2) use ($search) {
                              $q2->where('nama', 'like', "%$search%");
                          });
                });
            })
            ->get();

        return view('Admin.hasil_biodata_dkv', compact('data', 'search'));
    }

    // =====================================================
    // SIJA
    // =====================================================
    public function sija(Request $request)
    {
        $search = $request->search;

        $data = BiodataSiswa::with('perusahaan')
            ->where('jurusan', 'Sistem Informasi Jaringan Dan Aplikasi')
            ->when($search, function ($q) use ($search) {
                $q->where(function($query) use ($search) {
                    $query->where('nama', 'like', "%$search%")
                          ->orWhere('kelas', 'like', "%$search%")
                          ->orWhereHas('perusahaan', function($q2) use ($search) {
                              $q2->where('nama', 'like', "%$search%");
                          });
                });
            })
            ->get();

        return view('Admin.hasil_biodata_sija', compact('data', 'search'));
    }

    // =====================================================
    // TKJ
    // =====================================================
    public function tkj(Request $request)
    {
        $search = $request->search;

        $data = BiodataSiswa::with('perusahaan')
            ->where('jurusan', 'Teknik Komputer Dan Jaringan')
            ->when($search, function ($q) use ($search) {
                $q->where(function($query) use ($search) {
                    $query->where('nama', 'like', "%$search%")
                          ->orWhere('kelas', 'like', "%$search%")
                          ->orWhereHas('perusahaan', function($q2) use ($search) {
                              $q2->where('nama', 'like', "%$search%");
                          });
                });
            })
            ->get();

        return view('Admin.hasil_biodata_tkj', compact('data', 'search'));
    }

    // =====================================================
    // EDIT
    // =====================================================
    public function edit($id)   
    {
        $data = BiodataSiswa::findOrFail($id);
        return view('Admin.editBiodata', compact('data'));
    }

    // =====================================================
    // UPDATE
    // =====================================================
    public function update(Request $request, $id)
    {
        $data = BiodataSiswa::findOrFail($id);

        $input = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('foto_siswa', 'public');
            $input['foto'] = basename($path);
        }

//     if ($request->hasFile('foto')) {
//     $file = $request->file('foto');
//     $namaFile = time() . '.' . $file->getClientOriginalExtension();
//     $tujuan = public_path('storage/foto_siswa');
//     $file->move($tujuan, $namaFile);
//     $input['foto'] = 'storage/foto_siswa/' . $namaFile;
// }

        $data->update($input);

        // redirect sesuai jurusan
        if ($data->jurusan == 'Rekayasa Perangkat Lunak') {
            return redirect()->route('admin.rpl');
        } elseif ($data->jurusan == 'Desain Komunikasi Visual') {
            return redirect()->route('admin.dkv');
        } elseif ($data->jurusan == 'Sistem Informasi Jaringan Dan Aplikasi') {
            return redirect()->route('admin.sija');
        } else {
            return redirect()->route('admin.tkj');
        }
    }
}