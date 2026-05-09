<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa | PKL</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style-dashboard_siswa.css') }}">
</head>
<body>

    <header class="navbar">
        <div class="navbar-brand">
            <i class="fa-solid fa-graduation-cap"></i>
            <h1 class="logo">Dashboard Siswa</h1>
        </div>
        <button onclick="window.location.href='/logout'" class="logout-btn">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </header>

    <main class="main-container">

        @if(session('success'))
            <div class="alert-success">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>
        @endif

        <section class="profile-header">
            <div class="profile-info">
                <div class="foto-wrapper">
                    @if ($biodata->foto)
                        <img src="{{ asset('storage/foto_siswa/'.$biodata->foto) }}" class="foto-bulat" alt="Profil Siswa">
                    @else
                        <div class="foto-placeholder">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    @endif
                </div>

                <div class="user-detail">
                    <p class="greeting">Selamat Datang,</p>
                    <h2>{{ Auth::user()->name }}</h2>
                    <span class="badge"><i class="fa-solid fa-id-badge"></i> {{ $biodata->nama }}</span>
                </div>
            </div>

            <div class="btn-container">
                <button class="btn-isi" onclick="window.location.href='/jurnal'">
                    <i class="fa-solid fa-book-open"></i> Isi Jurnal
                </button>
                <button class="btn-riwayat" onclick="window.location.href='{{ route('jurnal.list') }}'">
                    <i class="fa-solid fa-clock-rotate-left"></i> Lihat Riwayat
                </button>
                <p class="info-unduh"><i class="fa-solid fa-circle-info"></i> Klik riwayat untuk mengunduh jurnal</p>
            </div>
        </section>

        <section class="biodata-card">
            <div class="card-header">
                <i class="fa-solid fa-address-card"></i>
                <h3>Biodata Lengkap</h3>
            </div>
            <div class="table-wrapper">
                <table>
                    <tbody>
                        <tr><th>Nama Lengkap</th><td>{{ $biodata->nama ?? '-' }}</td></tr>
                        <tr><th>Jurusan</th><td><span class="highlight">{{ $biodata->jurusan ?? '-' }}</span></td></tr>
                        <tr><th>Kelas</th><td>{{ $biodata->kelas ?? '-' }}</td></tr>
                        <tr><th>Alamat</th><td>{{ $biodata->alamat ?? '-' }}</td></tr>
                        <tr><th>No Telepon</th><td>{{ $biodata->no_telp ?? '-' }}</td></tr>
                        <tr><th>Email</th><td>{{ $biodata->email ?? '-' }}</td></tr>
                        <tr><th>Masa PKL</th><td><i class="fa-regular fa-calendar-days"></i> {{ $biodata->tgl_mulai_pkl ?? '-' }} <span class="sd">s/d</span> {{ $biodata->tgl_selesai_pkl ?? '-' }}</td></tr>
                        <tr><th>Perusahaan</th><td><strong class="company-name">{{ $biodata->perusahaan->nama ?? '-' }}</strong></td></tr>
                        <tr><th>Divisi / Bagian</th><td>{{ $biodata->divisi ?? '-' }}</td></tr>
                        <tr><th>Pembimbing Sekolah</th><td>{{ $biodata->pembimbing_sekolah ?? '-' }}</td></tr>
                        <tr><th>Pembimbing Industri</th><td>{{ $biodata->pembimbing_perusahaan ?? '-' }}</td></tr>
                    </tbody>
                </table> 
            {{-- {{ $biodata->tgl_mulai_pkl 
            ? \Carbon\Carbon::parse($biodata->tgl_mulai_pkl)->translatedFormat('d F Y') 
            : '-' }} --}} 
            </div>
        </section>

    </main>

</body>
</html>