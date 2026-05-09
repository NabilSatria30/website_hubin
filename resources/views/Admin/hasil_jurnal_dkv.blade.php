<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa PKL | Manajemen Jurnal</title>
    <link rel="stylesheet" href="{{ asset('css/style-hasil-jurnal.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="main-wrapper">
        <div class="container"> 
            
            <div class="header">
                <div class="header-left">
                    <a href="{{ route('pilih_jurusan_jurnal') }}" class="back-link">
                        <svg width="24" height="24" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"/> <path d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"/></svg>
                    </a>
                    <div class="title-section">
                        <h1>Jurnal Siswa PKL</h1>
                        <p>Jurusan Desain Komunikasi Visual</p>
                    </div>
                </div>

                <div class="search-box">
                    <form action="" method="GET">
                        <input type="text" name="search" placeholder="Cari nama/kelas siswa..." value="{{ $search }}">
                        <button type="submit" class="btn-search">
                            <img src="{{ asset('Gambar/search.png') }}" alt="Search" onerror="this.style.display='none'">
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
                            <th class="text-center" style="width: 150px;">Aksi</th>
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
                                    <button class="btn-lihat" onclick="window.location.href='{{ route('hasiljurnal.detail', $item->user_id) }}'">
                                        Lihat Detail
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="empty-state">Data siswa tidak ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

</body>
</html>