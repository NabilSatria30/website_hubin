<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Jurnal | Siswa</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <style>
    * { box-sizing: border-box; font-family: 'Inter', sans-serif; }

    body {
      background-color: #f0f2f5;
      margin: 0;
      padding: 20px;
      color: #1f2937;
    }

    .container { max-width: 800px; margin: 0 auto; }

    .header-section { text-align: center; margin-bottom: 30px; }

    h2 { font-size: 28px; font-weight: 700; color: #111827; margin: 10px 0; }

    .back-btn {
      display: inline-flex;
      color: #6b7280;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      transition: 0.3s;
    }

    .back-btn:hover { color: #111827; transform: translateX(-5px); }

    /* ACTION BAR */
    .action-bar {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: space-between;
      align-items: flex-end;
      background: white;
      padding: 20px;
      border-radius: 16px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      margin-bottom: 25px;
    }

    .search-group { display: flex; flex-direction: column; gap: 8px; flex-grow: 1; }
    .search-group label { font-size: 11px; font-weight: 800; color: #9ca3af; text-transform: uppercase; }

    .input-wrapper { display: flex; gap: 8px; }

    input[type="date"] {
      padding: 10px;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      outline: none;
      font-size: 14px;
    }

    .btn {
      padding: 10px 18px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
      border: none;
      transition: 0.2s;
    }

    .btn-search { background: #3b82f6; color: white; }
    .btn-reset { background: #f3f4f6; color: #4b5563; }

    .btn-kirim {
      background: #10b981;
      color: white;
      box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
    }

    /* CARD STYLE */
    .card {
      background: white;
      border-radius: 18px;
      padding: 20px;
      margin-bottom: 15px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.02);
      border: 1px solid #f3f4f6;
    }

    .tanggal-badge {
      display: inline-block;
      background: #eff6ff;
      color: #1e40af;
      padding: 4px 12px;
      border-radius: 10px;
      font-size: 12px;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .content-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
    }

    .content-item label {
      display: block;
      font-size: 10px;
      font-weight: 800;
      color: #9ca3af;
      text-transform: uppercase;
      margin-bottom: 4px;
    }

    .content-item p {
      margin: 0;
      font-size: 14px;
      color: #374151;
      line-height: 1.5;
    }

    .footer-card {
      margin-top: 15px;
      padding-top: 12px;
      border-top: 1px solid #f9fafb;
      display: flex;
      justify-content: flex-end;
    }

    .btn-unduh {
      font-size: 12px;
      color: #3b82f6;
      text-decoration: none;
      font-weight: 700;
    }

    .btn-unduh:hover { text-decoration: underline; }

    .empty-state {
      text-align: center;
      padding: 40px;
      background: white;
      border-radius: 20px;
      color: #9ca3af;
    }

    @media (max-width: 600px) {
      .content-grid { grid-template-columns: 1fr; }
      .action-bar { flex-direction: column; align-items: stretch; }
      .btn-kirim { order: -1; margin-bottom: 10px; text-align: center; }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="header-section">
    <a href="{{ route('dashboard_siswa') }}" class="back-btn">← Dashboard</a>
    <h2>Riwayat Jurnal</h2>
  </div>

  <div class="action-bar">
    <form action="{{ route('jurnal.list') }}" method="GET" class="search-group">
      <label>Cari Tanggal</label>
      <div class="input-wrapper">
        <input type="date" name="search_date" value="{{ request('search_date') }}">
        <button type="submit" class="btn btn-search">Cari</button>
        @if(request('search_date'))
          <a href="{{ route('jurnal.list') }}" class="btn btn-reset">Reset</a>
        @endif
      </div>
    </form>
    <a href="{{ route('jurnal.create') }}" class="btn btn-kirim">+ Jurnal Baru</a>
  </div>

  @if (session('success'))
    <div style="background: #ecfdf5; color: #065f46; padding: 12px; border-radius: 10px; margin-bottom: 20px; font-weight: 600; border-left: 4px solid #10b981;">
      ✔ {{ session('success') }}
    </div>
  @endif

  @forelse ($jurnal as $jur)
    <div class="card">
      <div class="tanggal-badge">
        📅 {{ \Carbon\Carbon::parse($jur->tanggal)->translatedFormat('d M Y') }}
      </div>

      <div class="content-grid">
        <div class="content-item">
          <label>Materi</label>
          <p>{{ Str::limit($jur->materi, 80, '...') }}</p>
        </div>
        <div class="content-item">
          <label>Tugas</label>
          <p>{{ Str::limit($jur->tugas, 80, '...') }}</p>
        </div>
      </div>

      <div class="footer-card">
        <a href="{{ route('jurnal.download', $jur->id) }}" class="btn-unduh">
          Download PDF →
        </a>
      </div>
    </div>
  @empty
    <div class="empty-state">
      <p>Data tidak ditemukan.</p>
    </div>
  @endforelse

</div>

</body>
</html>