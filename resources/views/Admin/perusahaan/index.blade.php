<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perusahaan | Manajemen PKL</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-wrapper">
    <div class="container">
        <div class="nav-top">
            <div class="top-bar">
                <a href="{{ route('dashboard_admin') }}" class="back-btn">
                    <span class="icon">←</span> Kembali ke Dashboard
                </a>
            </div>
        </div>

        <div class="header">
            <div class="header-title">
                <h2>Daftar Perusahaan Mitra</h2>
                <p>Kelola data mitra industri dan pantau kuota siswa PKL dengan mudah.</p>
            </div>
            <a class="btn-tambah" href="{{ route('mitra.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Tambah Perusahaan
            </a>
        </div>

        <div class="card-table">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="col-nama">Nama Perusahaan</th>
                            <th class="col-alamat">Alamat Lengkap</th>
                            <th class="col-telp">No. Telp</th>
                            <th class="col-siswa">Jumlah Siswa</th>
                            <th class="col-aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($perusahaan as $p)
                        <tr>
                            <td>
                                <div class="company-name">{{ $p->nama }}</div>
                            </td>
                            <td>
                                <div class="address-text">{{ $p->alamat }}</div>
                            </td>
                            <td>
                                <span class="phone-text">{{ $p->no_telp }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge-count">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    {{ $p->biodata_count }} Siswa
                                </span>
                            </td>
                            <td class="actions-cell">
                                <div class="action-group">
                                    <a class="action-btn btn-view" href="{{ route('mitra.detail', $p->id) }}" title="Lihat Detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </a>
                                    
                                    <a class="action-btn btn-edit" href="{{ route('mitra.edit', $p->id) }}" title="Edit Data">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                    
                                    <a class="action-btn btn-danger" href="{{ route('mitra.delete', $p->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus perusahaan ini? Data yang dihapus tidak dapat dikembalikan.')" title="Hapus Data">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    </a>
                                    
                                    <div class="divider"></div>

                                    <a href="{{ route('mitra.download', $p->id) }}" class="btn-download" title="Download Laporan">
                                        <img src="{{ asset('Gambar/unduh.webp') }}" class="download-icon" alt="Download" onerror="this.src='https://cdn-icons-png.flaticon.com/512/724/724933.png'">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="empty-row">
                                <div class="empty-state">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#cbd5e1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                                    <p>Belum ada data perusahaan yang ditambahkan.</p>
                                    <span class="text-muted">Silakan klik "Tambah Perusahaan" untuk memulai.</span>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
/* ============================== */
/* RESET & VARIABLES */
/* ============================== */
:root {
    --primary: #4f46e5;
    --primary-hover: #4338ca;
    --success: #10b981;
    --success-hover: #059669;
    --danger: #ef4444;
    --danger-hover: #dc2626;
    --warning: #f59e0b;
    --warning-hover: #d97706;
    --info: #3b82f6;
    --info-hover: #2563eb;
    
    --bg-main: #f8fafc;
    --bg-card: #ffffff;
    --text-main: #0f172a;
    --text-muted: #64748b;
    --border-color: #e2e8f0;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(#cecece, #e5e7eb);
    color: var(--text-main);
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
}

.main-wrapper {
    padding: 40px 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* ============================== */
/* NAVIGATION & BREADCRUMB */
/* ============================== */
.nav-top {
    margin-bottom: 24px;
}

.back-btn {
    display: inline-flex;
    align-items: center;
    background: #ffffff;
    color: #4b5563;
    padding: 10px 20px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    transition: all 0.2s ease;
}

.back-btn:hover {
    background: #1e293b;
    color: #ffffff;
    transform: translateX(-5px);
}

.back-btn .icon {
    margin-right: 8px;
}

/* ============================== */
/* HEADER SECTION */
/* ============================== */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 32px;
    gap: 20px;
    flex-wrap: wrap;
}

.header-title h2 {
    font-size: 26px;
    font-weight: 700;
    color: var(--text-main);
    margin-bottom: 6px;
    letter-spacing: -0.02em;
}

.header-title p {
    color: var(--text-muted);
    font-size: 14px;
}

.btn-tambah {
    background-color: var(--primary);
    color: white;
    padding: 12px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2), 0 2px 4px -1px rgba(79, 70, 229, 0.1);
}

.btn-tambah:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3), 0 4px 6px -2px rgba(79, 70, 229, 0.1);
}

/* ============================== */
/* TABLE CARD & STYLES */
/* ============================== */
.card-table {
    background: var(--bg-card);
    border-radius: 16px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 10px 15px -3px rgba(0, 0, 0, 0.02);
    border: 1px solid var(--border-color);
    overflow: hidden;
}

.table-responsive {
    overflow-x: auto;
}

/* Custom Scrollbar for Table */
.table-responsive::-webkit-scrollbar {
    height: 8px;
}
.table-responsive::-webkit-scrollbar-track {
    background: #f1f5f9; 
}
.table-responsive::-webkit-scrollbar-thumb {
    background: #cbd5e1; 
    border-radius: 4px;
}
.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #94a3b8; 
}

table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    white-space: nowrap;
}

thead {
    background-color: #f8fafc;
    border-bottom: 2px solid var(--border-color);
}

th {
    padding: 16px 24px;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-weight: 600;
    color: var(--text-muted);
}

td {
    padding: 18px 24px;
    font-size: 14px;
    border-bottom: 1px solid var(--border-color);
    vertical-align: middle;
}

tbody tr {
    transition: background-color 0.2s ease;
}

tbody tr:hover {
    background-color: #f1f5f9;
}

tbody tr:last-child td {
    border-bottom: none;
}

/* KOLOM WIDTH */
.col-nama { width: 25%; }
.col-alamat { width: 35%; }
.col-telp { width: 15%; }
.col-siswa { width: 10%; text-align: center; }
.col-aksi { width: 15%; text-align: center; }

/* TYPOGRAPHY DALAM TABEL */
.company-name { 
    font-weight: 600; 
    color: var(--text-main);
    font-size: 15px;
}
.address-text { 
    color: var(--text-muted); 
    font-size: 14px;
    white-space: normal; /* Biar alamat bisa turun ke bawah */
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.phone-text {
    font-family: monospace;
    font-size: 14px;
    color: var(--text-main);
    background: #f1f5f9;
    padding: 4px 8px;
    border-radius: 6px;
}

.text-center { text-align: center; }

/* BADGES */
.badge-count {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #ecfdf5;
    color: var(--success-hover);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    border: 1px solid #a7f3d0;
}

/* ============================== */
/* BUTTON ACTIONS */
/* ============================== */
.action-group {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 8px;
    color: white;
    transition: all 0.2s ease;
    text-decoration: none;
}

.btn-view { background: var(--info); }
.btn-view:hover { background: var(--info-hover); transform: translateY(-2px); box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3); }

.btn-edit { background: var(--warning); }
.btn-edit:hover { background: var(--warning-hover); transform: translateY(-2px); box-shadow: 0 4px 6px rgba(245, 158, 11, 0.3); }

.btn-danger { background: var(--danger); }
.btn-danger:hover { background: var(--danger-hover); transform: translateY(-2px); box-shadow: 0 4px 6px rgba(239, 68, 68, 0.3); }

.divider {
    width: 1px;
    height: 24px;
    background-color: var(--border-color);
    margin: 0 4px;
}

.btn-download {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: #f1f5f9;
    border: 1px solid var(--border-color);
    transition: all 0.2s ease;
}

.btn-download:hover {
    background: white;
    border-color: var(--primary);
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.download-icon {
    height: 18px;
    width: 18px;
    object-fit: contain;
}

/* ============================== */
/* EMPTY STATE */
/* ============================== */
.empty-row {
    padding: 60px 20px !important;
}

.empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
}

.empty-state p {
    font-size: 16px;
    font-weight: 600;
    color: var(--text-main);
    margin-top: 8px;
}

.empty-state span {
    font-size: 14px;
}

/* ============================== */
/* MOBILE RESPONSIVE */
/* ============================== */
@media (max-width: 768px) {
    .main-wrapper {
        padding: 20px 12px;
    }

    .header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }

    .header-title h2 {
        font-size: 22px;
    }

    .btn-tambah {
        width: 100%;
        justify-content: center;
        padding: 14px;
    }

    th, td {
        padding: 14px 16px;
    }
    
    .address-text {
        min-width: 200px; /* Mencegah kolom alamat terlalu terhimpit di mobile */
    }

    .action-group {
        gap: 6px;
    }
}
</style>

</body>
</html>