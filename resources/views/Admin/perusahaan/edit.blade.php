<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Perusahaan | Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="page-wrapper">
    <div class="content-container">
        <div class="nav-header">
            <a href="{{ route('mitra.index') }}" class="btn-back">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Kembali ke Daftar
            </a>
        </div>

        <div class="card-form">
            <div class="card-header">
                <div class="icon-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </div>
                <h2>Edit Data Perusahaan</h2>
                <p>Perbarui informasi mitra industri agar tetap akurat</p>
            </div>

            <form action="{{ route('mitra.update', $perusahaan->id) }}" method="POST" class="form-body">
                @csrf
                @method('POST') 

                <div class="form-group">
                    <label for="nama">Nama Perusahaan <span class="required-star">*</span></label>
                    <div class="input-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M9 8h1"></path><path d="M9 12h1"></path><path d="M9 16h1"></path><path d="M14 8h1"></path><path d="M14 12h1"></path><path d="M14 16h1"></path><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path></svg>
                        <input type="text" id="nama" name="nama" value="{{ $perusahaan->nama }}" placeholder="Contoh: PT. Maju Jaya" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap <span class="required-star">*</span></label>
                    <div class="input-wrapper align-top">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap perusahaan..." required>{{ $perusahaan->alamat }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="no_telp">Nomor Telepon / WhatsApp</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <input type="text" id="no_telp" name="no_telp" value="{{ $perusahaan->no_telp }}" placeholder="0812xxxxxx">
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-save">
                        Simpan Perubahan
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                    </button>
                    <a href="{{ route('mitra.index') }}" class="btn-cancel">Batalkan Perubahan</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<style>
/* ============================== */
/* GLOBAL RESET & VARIABLES */
/* ============================== */
:root {
    --primary: #4f46e5;
    --primary-hover: #4338ca;
    --primary-light: rgba(79, 70, 229, 0.15);
    --bg-main: #f8fafc;
    --bg-card: #ffffff;
    --text-main: #0f172a;
    --text-muted: #64748b;
    --border-color: #e2e8f0;
    --danger: #ef4444;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background-color: var(--bg-main);
    color: var(--text-main);
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
}

.page-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
}

.content-container {
    width: 100%;
    max-width: 520px;
}

/* ============================== */
/* NAVIGATION */
/* ============================== */
.nav-header {
    margin-bottom: 24px;
}

.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    color: var(--text-muted);
    font-size: 14px;
    font-weight: 600;
    transition: all 0.2s ease;
}

.btn-back:hover {
    color: var(--primary);
    transform: translateX(-4px);
}

/* ============================== */
/* CARD DESIGN */
/* ============================== */
.card-form {
    background: var(--bg-card);
    border-radius: 20px;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    border: 1px solid var(--border-color);
    overflow: hidden;
}

.card-header {
    padding: 32px 32px 24px;
    text-align: center;
    background: linear-gradient(to bottom, #f8fafc, #ffffff);
    border-bottom: 1px solid #f1f5f9;
}

.icon-badge {
    width: 56px;
    height: 56px;
    background: #fff7ed; /* Warna orange tipis untuk aksen 'edit' */
    color: #f59e0b;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    box-shadow: 0 4px 6px -1px rgba(245, 158, 11, 0.15);
}

.card-header h2 {
    font-size: 22px;
    font-weight: 700;
    color: var(--text-main);
    letter-spacing: -0.02em;
}

.card-header p {
    color: var(--text-muted);
    font-size: 14px;
    margin-top: 6px;
}

/* ============================== */
/* FORM ELEMENTS */
/* ============================== */
.form-body {
    padding: 32px;
}

.form-group {
    margin-bottom: 22px;
}

label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 8px;
}

.required-star {
    color: var(--danger);
}

.input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 16px;
    color: #94a3b8;
    transition: color 0.3s ease;
}

.input-wrapper.align-top .input-icon {
    top: 16px;
}

input, textarea {
    width: 100%;
    padding: 14px 16px 14px 46px;
    border-radius: 12px;
    border: 1.5px solid var(--border-color);
    font-family: inherit;
    font-size: 14px;
    color: var(--text-main);
    background-color: #f8fafc;
    transition: all 0.3s ease;
}

textarea {
    min-height: 110px;
    resize: none;
    line-height: 1.6;
}

input:focus, textarea:focus {
    outline: none;
    background-color: #ffffff;
    border-color: var(--primary);
    box-shadow: 0 0 0 4px var(--primary-light);
}

input:focus ~ .input-icon, 
textarea:focus ~ .input-icon {
    color: var(--primary);
}

/* ============================== */
/* BUTTONS & FOOTER */
/* ============================== */
.form-footer {
    margin-top: 36px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.btn-save {
    width: 100%;
    background-color: var(--primary);
    color: white;
    padding: 16px;
    border: none;
    border-radius: 12px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(79, 70, 229, 0.25);
}

.btn-save:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.35);
}

.btn-cancel {
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    color: var(--text-muted);
    padding: 8px;
    transition: color 0.2s;
}

.btn-cancel:hover {
    color: var(--danger);
}

/* ============================== */
/* RESPONSIVE */
/* ============================== */
@media (max-width: 480px) {
    .page-wrapper {
        padding: 20px 15px;
        align-items: flex-start;
    }

    .card-header, .form-body {
        padding-left: 20px;
        padding-right: 20px;
    }
}
</style>