<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jurusan | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style-data-jurusan.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="page">
    <div class="top-bar">
        <a href="{{ route('dashboard_admin') }}" class="back-btn">
            <span class="icon">←</span> Kembali ke Dashboard
        </a>
    </div>

    <header class="header-section">
        <h1>Pilih Jurusan</h1>
        <p>Silahkan pilih kompetensi keahlian untuk mengelola biodata siswa</p>
    </header>

    <div class="container">
        <div class="card">
            <div class="card-icon">
                <img src="../Gambar/logorpl.png" alt="RPL">
            </div>
            <div class="card-content">
                <h2>Rekayasa Perangkat Lunak</h2>
                <button class="btn-manage" onclick="window.location.href='{{ route('hasilbiodatarpl') }}'">
                    Lihat Data
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img src="../Gambar/logodkv.png" alt="DKV">
            </div>
            <div class="card-content">
                <h2>Desain Komunikasi Visual</h2>
                <button class="btn-manage" onclick="window.location.href='{{ route('hasilbiodatadkv') }}'">
                    Lihat Data
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img src="../Gambar/logosija.png" alt="SIJA">
            </div>
            <div class="card-content">
                <h2>Sistem Informasi Jaringan & Aplikasi</h2>
                <button class="btn-manage" onclick="window.location.href='{{ route('hasilbiodatasija') }}'">
                    Lihat Data
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img src="../Gambar/logotkj.png" alt="TKJ">
            </div>
            <div class="card-content">
                <h2>Teknik Komputer dan Jaringan</h2>
                <button class="btn-manage" onclick="window.location.href='{{ route('hasilbiodatatkj') }}'">
                    Lihat Data
                </button>
            </div>
        </div>
    </div>
</div>

</body>
</html>