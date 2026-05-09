<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa PKL | Jurusan {{ $jurusan }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-hasil-jurnal.css') }}">
</head>
<body>

    <div class="main-wrapper">
        <div class="container"> 
            
            <div class="header">
                <div class="header-left">
                    <a href="{{ route('dashboard_gurujurusan') }}" class="back-link">
                        <img src="/Gambar/back-button.png" alt="tombol kembali">
                    </a>
                    <div class="title-section">
                        <h1>Jurnal Siswa PKL</h1>
                        <p>Jurusan {{ $jurusan }}</p>
                    </div>
                </div>

                <div class="search-box">
                    <form action="" method="GET">
                        <input type="text" name="search" placeholder="Cari nama siswa..." value="{{ $search }}">
                        <button type="submit" class="btn-search">
                            <img src="/Gambar/search-icon.png" alt="search" onerror="this.style.display='none'">
                        </button>
                    </form>
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">No</th>
                            <th>Nama Lengkap</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center" style="width: 200px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td class="text-center text-muted">{{ $loop->iteration }}</td>
                                <td class="text-name">{{ $item->nama }}</td>
                                <td class="text-center">
                                    <span class="badge-kelas">{{ $item->kelas }}</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn-lihat" onclick="window.location.href='{{ route('guru.jurnal.detail', $item->user_id) }}'">
                                        Lihat Jurnal
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="empty-state">
                                    Data siswa tidak ditemukan...
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

</body>
</html>