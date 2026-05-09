<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar">
        <div class="navbar-brand">
            <span class="logo-icon">📊</span>
            <h1>Dashboard Guru Jurusan ({{ $user->jurusan }})</h1>
        </div>

        <button class="logout-btn" onclick="window.location.href='/logout'">
            <img src="../Gambar/logout.png" alt="Logout">
            Logout
        </button>
    </nav>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="container">

        <!-- Header -->
        <section class="dashboard-header">
            <h2>Pendataan Siswa PKL</h2>
            <p>
                Selamat datang di Dashboard Guru Jurusan .
                Silahkan pilih menu untuk melihat data siswa dan hasil jurnal siswa.
            </p>
            <div class="divider"></div>
        </section>

        <!-- Menu Cards -->
        <section class="menu-grid">

            <a href="{{ Route('guru.biodata') }}" class="menu-card green">
                <div class="icon-box">
                    <img src="../Gambar/datasiswa.png" alt="Biodata Siswa">
                </div>
                <h3>Biodata Siswa</h3>
                <span>Kelola data identitas siswa PKL</span>
            </a>

            <a href="{{ Route('guru.jurnal') }}" class="menu-card yellow">
                <div class="icon-box">
                    <img src="../Gambar/journal.png" alt="Jurnal Siswa">
                </div>
                <h3>Jurnal Siswa</h3>
                <span>Monitoring laporan kegiatan siswa</span>
            </a>

        </section>

    </main>

</body>
</html>
