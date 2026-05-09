<?php

namespace App\Exports;

use App\Models\BiodataSiswa;
use App\Models\Perusahaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;

class SiswaPerusahaanExport implements 
    FromCollection, 
    WithHeadings, 
    WithMapping, 
    WithStyles, 
    ShouldAutoSize,
    WithEvents,
    WithCustomStartCell
{
    protected $perusahaan_id;
    protected $perusahaan;
    protected $total;

    public function __construct($perusahaan_id)
    {
        $this->perusahaan_id = $perusahaan_id;
        $this->perusahaan = Perusahaan::find($perusahaan_id);
        $this->total = BiodataSiswa::where('perusahaan_id', $perusahaan_id)->count();
    }

    // ✅ DATA
    public function collection()
    {
        return BiodataSiswa::where('perusahaan_id', $this->perusahaan_id)->get();
    }

    // ✅ START DI BARIS 5 (AMAN)
    public function startCell(): string
    {
        return 'A5';
    }

    // ✅ HEADER
    public function headings(): array
    {
        return [
            'No',
            'Nama Siswa',
            'Jurusan',
            'Tanggal Mulai',
            'Tanggal Selesai',
        ];
    }

    // ✅ DATA MAP
    public function map($siswa): array
    {
        static $no = 0;

        return [
            ++$no,
            $siswa->nama,
            $siswa->jurusan,
            $siswa->tgl_mulai_pkl,
            $siswa->tgl_selesai_pkl,
        ];
    }

    // ✅ STYLE HEADER
    public function styles(Worksheet $sheet)
    {
        return [
            5 => [
                'font' => ['bold' => true],
                'alignment' => ['horizontal' => 'center'],
                'fill' => [
                    'fillType' => 'solid',
                    'startColor' => ['rgb' => 'D9E1F2']
                ],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {

                $sheet = $event->sheet->getDelegate();

                // =========================
                // HEADER ATAS
                // =========================
                $sheet->mergeCells('A1:E1');
                $sheet->setCellValue('A1', 'DATA SISWA PKL');

                $sheet->mergeCells('A2:E2');
                $sheet->setCellValue('A2', 'Perusahaan: ' . ($this->perusahaan->nama ?? '-'));

                $sheet->mergeCells('A3:E3');
                $sheet->setCellValue('A3', 'Total Siswa: ' . $this->total);

                // STYLE HEADER ATAS
                $sheet->getStyle('A1:A3')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 14
                    ],
                    'alignment' => [
                        'horizontal' => 'center'
                    ],
                ]);

                $rowCount = $sheet->getHighestRow();

                // =========================
                // BORDER
                // =========================
                $sheet->getStyle('A5:E' . $rowCount)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                ]);

                // =========================
                // CENTER KOLOM
                // =========================
                $sheet->getStyle('A6:A' . $rowCount)->getAlignment()->setHorizontal('center');

                $sheet->getStyle('D6:E' . $rowCount)->getAlignment()->setHorizontal('center');

                // =========================
                // ZEBRA TABLE
                // =========================
                for ($i = 6; $i <= $rowCount; $i++) {
                    if ($i % 2 == 0) {
                        $sheet->getStyle('A'.$i.':E'.$i)->applyFromArray([
                            'fill' => [
                                'fillType' => 'solid',
                                'startColor' => ['rgb' => 'F8FAFC']
                            ],
                        ]);
                    }
                }

            },
        ];
    }
}