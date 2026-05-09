<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Jurnal Siswa</title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 30px; /* 🔥 diperkecil biar muat */
            font-size: 14px; /* 🔥 sedikit diperkecil */
            color: #000;
            line-height: 1.4; /* 🔥 dipadatkan */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px; /* 🔥 diperkecil */
            text-transform: uppercase;
            font-size: 20px;
            font-weight: bold;
        }

        .info p {
            margin: 4px 0; /* 🔥 lebih rapat */
            font-size: 14px;
        }

        .section-title {
            font-weight: bold;
            font-size: 15px;
            margin-top: 15px; /* 🔥 diperkecil */
            margin-bottom: 5px;
            text-decoration: underline;
        }

        .content-box {
            border: 1px solid #000;
            padding: 10px;
            min-height: 60px; /* 🔥 lebih pendek */
            font-size: 14px;
            background: #fafafa;
        }

        img {
            margin-top: 8px;
            border: 1px solid #000;
            padding: 3px;
            max-width: 100%;
            max-height: 200px; /* 🔥 ini kunci biar gak nambah halaman */
            display: block;
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
    <h2>Laporan Jurnal Siswa</h2>

    <div class="info">
        <p><strong>Nama:</strong> {{ $biodata->nama }}</p>
        <p><strong>Jurusan:</strong> {{ $biodata->jurusan }}</p>
        <p><strong>Tanggal:</strong> {{ $data->tanggal }}</p>
    </div>

    <p class="section-title">Materi</p>
    <div class="content-box">
        {!! nl2br(e($data->materi)) !!}
    </div>

    <p class="section-title">Tugas Dari Pembimbing</p>
    <div class="content-box">
        {!! nl2br(e($data->tugas)) !!}
    </div>

    @if (!empty($data->foto_base64))
        <p class="section-title">Dokumentasi Kegiatan</p>
        <img src="{{ $data->foto_base64 }}">
    @endif
</body>
</html>