<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
public function index()
    {
        $perusahaan = Perusahaan::withCount('biodata')->get();
        return view('Admin.perusahaan.index', compact('perusahaan'));
    }

    public function create()
    {
        return view('Admin.perusahaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'alamat' => 'nullable|max:200',
            'no_telp' => 'nullable|max:50',
        ]);

        Perusahaan::create($request->all());

        return redirect()->route('mitra.index')->with('success', 'Perusahaan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        return view('Admin.perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'alamat' => 'nullable|max:200',
            'no_telp' => 'nullable|max:50',
        ]);

        Perusahaan::findOrFail($id)->update($request->all());

        return redirect()->route('mitra.index')->with('success', 'Perusahaan berhasil diperbarui');
    }

    public function delete($id)
    {
        Perusahaan::destroy($id);

        return redirect()->route('mitra.index')->with('success', 'Perusahaan berhasil dihapus');
    }

   public function detail($id, Request $request)
{
    $perusahaan = Perusahaan::with('biodata')->findOrFail($id);

    // Ambil semua biodata siswa di perusahaan ini
    $biodata = $perusahaan->biodata();

    // FILTER NAMA
    if ($request->nama) {
        $biodata->where('nama', 'like', '%' . $request->nama . '%');
    }

    // FILTER JURUSAN
    if ($request->jurusan) {
        $biodata->where('jurusan', $request->jurusan);
    }

    $biodata = $biodata->get();

    // Ambil daftar jurusan unik untuk dropdown
    $jurusanList = $perusahaan->biodata->pluck('jurusan')->unique();

    return view('Admin.Perusahaan.detail', compact('perusahaan', 'biodata', 'jurusanList'));
}

}
