<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata RPL - Sistem PKL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-hasil-biodata.css') }}">
</head>
<body>

<div class="main-wrapper">
    <header class="top-header">
        <div class="header-content">
            <div class="brand-section">
                <a href="{{ route('pilih_jurusan_biodata') }}" class="back-circle">
                    <img src="{{ asset('Gambar/back-button.png') }}" alt="Back">
                </a>
                <div class="title-group">
                    <h1>Biodata Siswa PKL</h1>
                    <p>Jurusan Rekayasa Perangkat Lunak</p>
                </div>
            </div>

            <div class="search-wrapper">
                <form action="" method="GET" class="search-form">
                    <input type="text" name="search" placeholder="Cari nama siswa..." value="{{ $search }}">
                    <button type="submit" class="search-icon-btn">
                        <img src="{{ asset('Gambar/search.png') }}" alt="Search">
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="content-container">
        <div class="table-card">
            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th class="txt-center" width="50">No</th>
                            <th class="txt-left">Info Siswa</th>
                            <th class="txt-center">Kelas</th>
                            <th class="txt-center">Alamat</th>
                            <th class="txt-center">Kontak</th>
                            <th class="txt-center">Masa PKL</th>
                            <th class="txt-center">Penempatan</th>
                            <th class="txt-center">Pembimbing</th>
                            <th class="txt-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="txt-center">{{ $loop->iteration }}</td>
                            <td>
                                <div class="student-info">
                                    <div class="avatar-wrapper">
                                        @if ($item->foto)
                                            <img src="{{ asset('storage/foto_siswa/'.$item->foto) }}" 
                                                 alt="Foto" class="img-table" onclick="showImage(this.src)">
                                        @else
                                            <div class="img-placeholder">N/A</div>
                                        @endif
                                    </div>
                                    <div class="name-detail">
                                        <span class="name-text">{{ $item->nama }}</span>
                                        <span class="sub-text">{{ $item->jurusan }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="txt-center"><span class="badge-light">{{ $item->kelas }}</span></td>
                            <td class="cell-center">
                                <div class="address-info">
                                    <p>{{ $item->alamat ?? 'Alamat belum diisi' }}</p>
                                </div>
                            </td>
                            <td class="cell-center">
                                <div class="contact-info">
                                    <span>{{ $item->no_telp }}</span>
                                    <small>{{ $item->email }}</small>
                                </div>
                            </td>
                            <td class="txt-center">
                                <div class="date-range">
                                    <span>{{ $item->tgl_mulai_pkl }}</span>
                                    <div class="date-divider"></div>
                                    <span>{{ $item->tgl_selesai_pkl }}</span>
                                </div>
                            </td>
                            <td class="cell-center">
                                <div class="placement-info">
                                    <strong>{{ $item->perusahaan->nama }}</strong>
                                    <p><i class="label">Divisi:</i>{{ $item->divisi }}</p>
                                </div>
                            </td>
                            <td class="cell-center">
                                <div class="mentor-info">
                                    <span><i class="label">Sekolah:</i> {{ $item->pembimbing_sekolah }}</span>
                                    <span><i class="label">Industri:</i> {{ $item->pembimbing_perusahaan }}</span>
                                </div>
                            </td>
                            <td class="txt-center">
                                <button class="btn-edit-action" 
                                    onclick="window.location.href='{{ route('Admin.editBiodata', $item->id) }}'">
                                    Edit Data
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div id="imageModal" class="image-overlay" onclick="closeImage()">
        <span class="close-overlay">&times;</span>
        <img class="overlay-img" id="imgPreview">
    </div>
</div>

<script>
function showImage(src) {
    const modal = document.getElementById("imageModal");
    modal.style.display = "flex";
    document.getElementById("imgPreview").src = src;
}

function closeImage() {
    document.getElementById("imageModal").style.display = "none";
}

document.addEventListener('keydown', function(e) {
    if (e.key === "Escape") closeImage();
});
</script>

</body>
</html>