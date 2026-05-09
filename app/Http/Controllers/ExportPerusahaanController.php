<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SiswaPerusahaanExport;
use App\Models\Perusahaan;
use Maatwebsite\Excel\Facades\Excel;

class ExportPerusahaanController extends Controller
{
        public function downloadExcel($id)
        {
            $perusahaan = Perusahaan::findOrFail($id);
            $filename = 'Daftar Siswa PKL - ' . $perusahaan->nama . '.xlsx';
            return Excel::download(new SiswaPerusahaanExport($id), $filename);
        }
}
