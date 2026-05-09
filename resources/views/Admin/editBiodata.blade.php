<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style-biodata.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <a href="{{ url()->previous() }}" class="btn-kembali">← Kembali</a>
    <h2>Formulir Pengeditan Biodata Siswa</h2>

<form action="{{ route('admin.updateBiodata', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="form-grid">
    <div class="form-group">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" value="{{ $data->nama }}">
    </div>

    <div class="form-group">
    <label>Jurusan</label>
    <select id="jurusan" name="jurusan" onchange="alertJurusan()">
        <option value="Rekayasa Perangkat Lunak" {{ $data->jurusan=='Rekayasa Perangkat Lunak'?'selected':'' }}>Rekayasa Perangkat Lunak</option>
        <option value="Desain Komunikasi Visual" {{ $data->jurusan=='Desain Komunikasi Visual'?'selected':'' }}>Desain Komunikasi Visual</option>
        <option value="Sistem Informasi Jaringan Dan Aplikasi" {{ $data->jurusan=='Sistem Informasi Jaringan Dan Aplikasi'?'selected':'' }}>Sistem Informasi Jaringan Dan APlikasi</option>
        <option value="Teknik Komputer Dan Jaringan" {{ $data->jurusan=='Teknik Komputer Dan Jaringan'?'selected':'' }}>Teknik Komputer Dan Jaringan</option>
    </select>
    </div>

    <div class="form-group">
    <label>Kelas</label>
    <textarea name="kelas">{{ $data->kelas }}</textarea>
    </div>

    <div class="form-group">
    <label>Alamat Lengkap</label>
    <textarea name="alamat">{{ $data->alamat }}</textarea>
    </div>

    <div class="form-group">
    <label>Nomer Telepon</label>
    <input type="text" name="no_telp" value="{{ $data->no_telp }}">
    </div>

    <div class="form-group">
    <label>Email Aktif</label>
    <input type="email" name="email" value="{{ $data->email }}">
    </div>

    <div class="form-group">
        <label>Tanggal Mulai PKL</label>
        <input type="date" name="tgl_mulai_pkl" value="{{ $data->tgl_mulai_pkl }}">
    </div>

    <div class="form-group">
        <label>Tanggal Selesai PKL</label>
        <input type="date" name="tgl_selesai_pkl" value="{{ $data->tgl_selesai_pkl }}">
    </div>

    <div class="form-group">
    <label>Perusahaan Tempat Pkl</label>
    <input type="text" name="perusahaan" value="{{ $data->perusahaan->nama }}">
    </div>

    <div class="form-group">
    <label>Divisi/Bagian Di Perusahaan</label>
    <input type="text" name="divisi" value="{{ $data->divisi }}">
    </div>

    <div class="form-group">
          <label>Nama Pembimbing Dari Sekolah</label>
          <input type="text" name="pembimbing_sekolah" value="{{ $data->pembimbing_sekolah }}">
    </div>

    <div class="form-group">
          <label>Nama Pembimbing Dari Perusahaan</label>
          <input type="text" name="pembimbing_perusahaan" value="{{ $data->pembimbing_perusahaan }}">
    </div>

    <div class="form-group" style="margin-top: 10px">
          <label>Upload Foto Muka</label>
          <input type="file" name="foto" accept="image/*">
    </div>
   </div> 

   <div class="btn-wrap">
    <button type="submit" class="btn-simpan">Simpan Perubahan</button>
   </div>
</form>
    </div>
    
    <script>
        function alertJurusan(){
        alert("Pastikan kelas sesuai dengan jurusan!");
    }
</script>
</body>
</html>