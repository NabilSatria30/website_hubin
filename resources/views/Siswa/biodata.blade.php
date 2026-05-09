<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa | Portal PKL</title>
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-biodata.css') }}">
</head>

<body>

<div class="container">
    <div class="header">
        <div class="icon-circle">
            <i class="fas fa-user-graduate"></i>
        </div>
        <h2>Formulir Biodata Siswa</h2>
        <p>Lengkapi data diri Anda untuk keperluan pendataan PKL</p>
    </div>

    <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-grid">
            <!-- Nama -->
            <div class="form-group">
                <label><i class="fas fa-id-card"></i> Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <!-- Jurusan -->
            <div class="form-group">
                <label><i class="fas fa-graduation-cap"></i> Jurusan</label>
                <select name="jurusan" required>
                    <option value="" disabled selected>-- Pilih Jurusan --</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Sistem Informasi Jaringan Dan Aplikasi">Sistem Informasi Jaringan dan Aplikasi</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
                </select>
            </div>

            <!-- Kelas -->
            <div class="form-group">
                <label><i class="fas fa-door-open"></i> Kelas</label>
                <input type="text" name="kelas" placeholder="Contoh: XII RPL 1" required>
            </div>

            <!-- No Telp -->
            <div class="form-group">
                <label><i class="fas fa-phone"></i> Nomor Telepon</label>
                <input type="text" name="no_telp" placeholder="0812xxxxxx" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email Aktif</label>
                <input type="email" name="email" placeholder="nama@email.com" required>
            </div>

            <!-- Divisi -->
            <div class="form-group">
                <label><i class="fas fa-briefcase"></i> Divisi / Bagian</label>
                <input type="text" name="divisi" placeholder="Contoh: Web Developer">
            </div>

            <!-- Alamat (Full Width) -->
            <div class="form-group full-width">
                <label><i class="fas fa-map-marker-alt"></i> Alamat Lengkap</label>
                <textarea name="alamat" placeholder="Jl. Nama Jalan No. XX, Kota..."></textarea>
            </div>

            <!-- Tanggal Mulai -->
            <div class="form-group">
                <label><i class="fas fa-calendar-alt"></i> Tanggal Mulai PKL</label>
                <input type="date" name="tgl_mulai_pkl">
            </div>

            <!-- Tanggal Selesai -->
            <div class="form-group">
                <label><i class="fas fa-calendar-check"></i> Tanggal Selesai PKL</label>
                <input type="date" name="tgl_selesai_pkl">
            </div>

            <!-- Perusahaan -->
            <div class="form-group">
                <label><i class="fas fa-building"></i> Perusahaan Tempat PKL</label>
                <select name="perusahaan_id">
                    <option value="">-- Pilih Perusahaan --</option>
                    @foreach ($perusahaan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Pembimbing Sekolah -->
            <div class="form-group">
                <label><i class="fas fa-user-tie"></i> Pembimbing Sekolah</label>
                <input type="text" name="pembimbing_sekolah" placeholder="Nama Guru Pembimbing">
            </div>

            <!-- Pembimbing Perusahaan -->
            <div class="form-group">
                <label><i class="fas fa-user-shield"></i> Pembimbing Perusahaan</label>
                <input type="text" name="pembimbing_perusahaan" placeholder="Nama Pembimbing perusahaan">
            </div>

            <!-- Upload Foto -->
            <div class="form-group full-width upload-section">
                <label><i class="fas fa-camera"></i> Foto Profil</label>
                <div class="upload-container">
                    <input type="file" name="foto" id="foto" accept="image/*">
                    <div class="preview-area">
                        <img id="previewFoto" src="#" alt="Preview">
                        <div id="placeholder" class="placeholder">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Klik untuk upload foto (Max 5MB)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-wrap">
            <a href="{{ route('login') }}" class="btn-kembali"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn-simpan"><i class="fas fa-save"></i> Simpan Data</button>
        </div>

    </form>
</div>

<script>
    const inputFoto = document.getElementById("foto");
    const preview = document.getElementById("previewFoto");
    const placeholder = document.getElementById("placeholder");

    inputFoto.addEventListener("change", function(e){
        const file = e.target.files[0];
        if(!file) return;

        if(file.size > 5 * 1024 * 1024){
            alert("Ukuran foto terlalu besar! Maksimal 5MB.");
            e.target.value = "";
            preview.style.display = "none";
            placeholder.style.display = "flex";
            return;
        }

        const reader = new FileReader();
        reader.onload = function(event){
            preview.src = event.target.result;
            preview.style.display = "block";
            placeholder.style.display = "none";
        };
        reader.readAsDataURL(file);
    });
</script>

</body>
</html>