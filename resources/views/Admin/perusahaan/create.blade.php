<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Perusahaan | Admin PKL</title>
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
                        <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                        <line x1="9" y1="22" x2="15" y2="22"></line>
                        <line x1="12" y1="6" x2="12" y2="6.01"></line>
                        <line x1="12" y1="10" x2="12" y2="10.01"></line>
                        <line x1="12" y1="14" x2="12" y2="14.01"></line>
                        <line x1="12" y1="18" x2="12" y2="18.01"></line>
                    </svg>
                </div>
                <h2>Tambah Perusahaan Baru</h2>
                <p>Masukkan data mitra industri untuk kerja sama PKL</p>
            </div>

            <form action="{{ route('mitra.store') }}" method="POST" class="form-body">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Perusahaan <span class="required-star">*</span></label>
                    <div class="input-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M9 8h1"></path><path d="M9 12h1"></path><path d="M9 16h1"></path><path d="M14 8h1"></path><path d="M14 12h1"></path><path d="M14 16h1"></path><path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path></svg>
                        <input type="text" id="nama" name="nama" placeholder="Contoh: PT. Teknologi Nusantara" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Kantor <span class="required-star">*</span></label>
                    <div class="input-wrapper align-top">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap lokasi PKL..." required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="no_telp">Nomor Telepon Kantor</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <input type="text" id="no_telp" name="no_telp" placeholder="Contoh: 021-xxxx-xxxx atau 0812xxxx">
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn-submit">
                        Simpan Perusahaan
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                    </button>
                    <p class="helper-text">Pastikan data yang diinput sudah sesuai dengan surat permohonan PKL.</p>
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
    background-color: #f8fafc;
    background-image: radial-gradient(#9ca3af 1px, transparent 1px);
    background-size: 20px 20px;
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
/* TOP NAVIGATION */
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
    padding: 8px 16px 8px 0;
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
    background: #eef2ff;
    color: var(--primary);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    box-shadow: 0 4px 6px -1px var(--primary-light);
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

/* Input dengan Ikon di dalamnya */
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
    padding: 14px 16px 14px 46px; /* Ruang ekstra di kiri untuk ikon */
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
    resize: vertical;
    line-height: 1.6;
}

input::placeholder, textarea::placeholder {
    color: #94a3b8;
}

/* Efek saat form diklik (Focus) */
input:focus, textarea:focus {
    outline: none;
    background-color: #ffffff;
    border-color: var(--primary);
    box-shadow: 0 0 0 4px var(--primary-light);
}

/* Ikon ikut berubah warna saat form di-focus */
input:focus ~ .input-icon, 
textarea:focus ~ .input-icon,
.input-wrapper:focus-within .input-icon {
    color: var(--primary);
}

/* ============================== */
/* BUTTON & FOOTER */
/* ============================== */
.form-footer {
    margin-top: 36px;
}

.btn-submit {
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

.btn-submit:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.35);
}

.helper-text {
    text-align: center;
    font-size: 12.5px;
    color: var(--text-muted);
    margin-top: 16px;
    line-height: 1.5;
}

/* ============================== */
/* RESPONSIVE */
/* ============================== */
@media (max-width: 480px) {
    .page-wrapper {
        padding: 20px 15px;
        align-items: flex-start;
    }

    .card-header {
        padding: 28px 20px 20px;
    }
    
    .form-body {
        padding: 24px 20px;
    }

    .icon-badge {
        width: 48px;
        height: 48px;
    }
    
    .card-header h2 {
        font-size: 20px;
    }
}
</style>