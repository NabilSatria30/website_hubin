<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal Siswa | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

@php
//logika menentukan bg gambar file
    $jurusanUser = strtolower(trim($biodata->jurusan));
    $gambarBg = ''; 

    if (str_contains($jurusanUser, 'rekayasa') || str_contains($jurusanUser, 'rpl')) {
        $gambarBg = 'bg-rpl.png';

    } elseif (str_contains($jurusanUser, 'sistem informasi jaringan dan aplikasi')) {
        $gambarBg = 'bg-sija.png';

    } elseif (str_contains($jurusanUser, 'jaringan') || str_contains($jurusanUser, 'tkj')) {
        $gambarBg = 'bg-tkj.jpeg';

    } elseif (str_contains($jurusanUser, 'dkv') || str_contains($jurusanUser, 'desain')) {
        $gambarBg = 'bg-dkv.png';
    }
@endphp

{{-- Jika gambar ditemukan, kita timpa background body lewat inline style agar aman --}}
<body style="{{ $gambarBg ? "background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('" . asset('Gambar/' . $gambarBg) . "'); background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed; background-position: center;" : "" }}">
    <div class="main-wrapper">
        <a href="{{ asset('/dashboard_siswa') }}" class="back-btn-container">
            <div class="back-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </div>
            <span>Kembali ke Dashboard</span>
        </a>

        @if ($errors->any())
            <div class="alert-error">
                <div class="alert-header">Ups! Ada kesalahan:</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-container">
            <div class="header-form">
                <div class="icon-box">
                    <img src="{{ asset('Gambar/journal.png') }}" alt="Jurnal">
                </div>
                <div class="text-box">
                    <h2>Jurnal Siswa</h2>
                    <p>Catat progres harian PKL kamu di sini.</p>
                </div>
            </div>

            <form id="jurnalForm" action="{{ route('jurnal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <div class="form-item">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ $biodata->nama }}" readonly class="readonly-input">
                    </div>

                    <div class="form-item">
                        <label>Kompetensi Keahlian</label>
                        <input type="text" name="jurusan" value="{{ $biodata->jurusan }}" readonly class="readonly-input">
                    </div>
                </div>

                <div class="form-item">
                    <label>Tanggal Kegiatan</label>
                    <input type="date" name="tanggal" value="{{ date('Y-m-d') }}" readonly>
                </div>

                <div class="form-item">
                    <label>Materi Yang Didapatkan</label>
                    <textarea name="materi" placeholder="Jelaskan teori atau materi baru yang kamu pelajari hari ini..." required></textarea>
                </div>

                <div class="form-item">
                    <label>Tugas / Implementasi</label>
                    <textarea name="tugas" placeholder="Apa saja yang kamu kerjakan secara praktik?" required></textarea>
                </div>

                <div class="form-item">
                    <label>Dokumentasi Kegiatan</label>
                    <div class="file-input-wrapper">
                        <input type="file" name="foto_kegiatan" id="foto" accept="image/*">
                        <p class="file-hint">Format: JPG, PNG, atau JPEG (Maks. 2MB)</p>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-kirim">
                        <span>Kirim Jurnal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>




<style>
    /* -------- RESET & BASE -------- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary: #2563eb;
    --primary-hover: #1d4ed8;
    --bg-gradient: linear-gradient(135deg, #e0f2fe 0%, #dcfce7 100%);
    --glass-bg: rgba(255, 255, 255, 0.8);
    --text-main: #1e293b;
    --text-label: #475569;
    --border-color: #e2e8f0;
}

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: var(--bg-gradient); /* Warna cadangan jika gambar gagal load */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    color: var(--text-main);
    display: flex;
    justify-content: center;
    padding: 40px 20px;
    min-height: 100vh;
}

.main-wrapper {
    width: 100%;
    max-width: 700px;
    animation: slideUp 0.6s ease-out;
}

/* -------- BACK BUTTON -------- */
.back-btn-container {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: var(--text-label);
    font-weight: 600;
    margin-bottom: 20px;
    transition: 0.3s;
}

.back-circle {
    background: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
}

.back-btn-container:hover {
    color: var(--primary);
    transform: translateX(-5px);
}

/* -------- FORM CONTAINER -------- */
.form-container {
    background: var(--glass-bg);
    backdrop-filter: blur(12px);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.5);
}

/* -------- HEADER -------- */
.header-form {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 35px;
}

.icon-box {
    background: white;
    padding: 12px;
    border-radius: 15px;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
}

.icon-box img {
    width: 40px;
    height: 40px;
    display: block;
}

.text-box h2 {
    font-size: 24px;
    color: #0f172a;
}

.text-box p {
    font-size: 14px;
    color: #64748b;
}

/* -------- FORM ELEMENTS -------- */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-item {
    margin-bottom: 20px;
}

label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 8px;
    color: var(--text-label);
}

input, textarea {
    width: 100%;
    padding: 12px 16px;
    border-radius: 12px;
    border: 1.5px solid var(--border-color);
    background: white;
    font-size: 15px;
    color: var(--text-main);
    transition: all 0.3s;
    font-family: inherit;
}

input:focus, textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
}

.readonly-input {
    background: #f8fafc;
    color: #94a3b8;
    cursor: not-allowed;
}

textarea {
    min-height: 110px;
    resize: none;
}

.file-input-wrapper {
    background: #f1f5f9;
    padding: 15px;
    border-radius: 12px;
    border: 2px dashed #cbd5e1;
}

.file-hint {
    font-size: 12px;
    color: #94a3b8;
    margin-top: 8px;
}

/* -------- BUTTONS -------- */
.form-actions {
    margin-top: 10px;
}

.btn-kirim {
    width: 100%;
    background: var(--primary);
    color: white;
    padding: 14px;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: 0.3s;
}

.btn-kirim:hover {
    background: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
}

/* -------- ALERT -------- */
.alert-error {
    background: #fff1f2;
    border-left: 4px solid #e11d48;
    padding: 15px;
    border-radius: 12px;
    margin-bottom: 20px;
}

.alert-header {
    font-weight: 700;
    color: #9f1239;
    margin-bottom: 5px;
}

.alert-error ul {
    list-style: none;
    font-size: 14px;
    color: #be123c;
}

/* -------- ANIMATION -------- */
@keyframes slideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* -------- RESPONSIVE -------- */
@media (max-width: 640px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
    .form-container {
        padding: 25px;
    }
}
</style>