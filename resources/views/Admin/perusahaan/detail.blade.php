<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Perusahaan</title>

    <style>
        /* =====================
           BASE
        ===================== */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6fa;
            margin: 0;
            padding: 16px;
        }

        a {
            text-decoration: none;
        }

        /* =====================
           BACK LINK
        ===================== */
        .back-link {
            display: inline-block;
            margin-bottom: 16px;
            background: #e6eef5;
            padding: 8px 14px;
            border-radius: 8px;
            color: #333;
            font-weight: 600;
        }

        /* =====================
           CARD CONTAINER
        ===================== */
        .card {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 24px;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        }

        h2 {
            margin: 0;
            font-size: 1.8rem;
            color: #046c8c;
        }

        h3 {
            margin-top: 28px;
            font-size: 1.2rem;
            color: #333;
        }

        /* =====================
           FILTER FORM
        ===================== */
        .filter-box {
            margin: 20px 0;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .filter-box input,
        .filter-box select {
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            min-width: 160px;
        }

        .btn-filter {
            padding: 10px 18px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }

        /* =====================
           TABLE (DESKTOP)
        ===================== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }

        th {
            background: #007bff;
            color: white;
            padding: 12px;
            font-size: 14px;
            text-align: center;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e3e3e3;
        }

        tr:nth-child(even) td {
            background: #f8fcff;
        }

        .empty {
            text-align: center;
            padding: 18px;
            color: #666;
            font-style: italic;
        }

        /* =====================
           MOBILE CARD MODE
        ===================== */
        .card-list {
            display: none;
            margin-top: 14px;
            gap: 14px;
        }

        .student-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 16px;
            box-shadow: 0 5px 16px rgba(0,0,0,.08);
        }

        .student-card h4 {
            margin: 0 0 6px;
            color: #046c8c;
            font-size: 1rem;
        }

        .student-card p {
            margin: 4px 0;
            font-size: 0.9rem;
            color: #444;
        }

        /* =====================
           RESPONSIVE
        ===================== */
        @media (max-width: 768px) {
            table {
                display: none;
            }

            .card-list {
                display: grid;
            }

            h2 {
                font-size: 1.5rem;
            }

            .card {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

<a class="back-link" href="{{ route('mitra.index') }}">← Kembali ke Daftar Perusahaan</a>

<div class="card">

    <h2>🏢 {{ $perusahaan->nama }}</h2>

    <!-- FILTER -->
    <form method="GET" action="{{ route('mitra.detail', $perusahaan->id) }}">
        <div class="filter-box">
            <input type="text" name="nama" placeholder="Cari nama..." value="{{ request('nama') }}">
            <select name="jurusan">
                <option value="">Semua Jurusan</option>
                @foreach ($jurusanList as $jur)
                    <option value="{{ $jur }}" {{ request('jurusan') == $jur ? 'selected' : '' }}>
                        {{ $jur }}
                    </option>
                @endforeach
            </select>
            <button class="btn-filter">Cari</button>
        </div>
    </form>

    <h3>Daftar Siswa PKL</h3>

    <!-- TABLE DESKTOP -->
    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
        </tr>

        @forelse ($biodata as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->jurusan }}</td>
            <td>{{ $s->tgl_mulai_pkl ?? '-' }}</td>
            <td>{{ $s->tgl_selesai_pkl ?? '-' }}</td>
        </tr>
        @empty
        <tr>
            <td class="empty" colspan="5">Tidak ada siswa ditemukan.</td>
        </tr>
        @endforelse
    </table>

    <!-- CARD MOBILE -->
    <div class="card-list">
        @foreach ($biodata as $s)
        <div class="student-card">
            <h4>{{ $s->nama }}</h4>
            <p><b>Jurusan:</b> {{ $s->jurusan }}</p>
            <p><b>Mulai:</b> {{ $s->tgl_mulai_pkl ?? '-' }}</p>
            <p><b>Selesai:</b> {{ $s->tgl_selesai_pkl ?? '-' }}</p>
        </div>
        @endforeach

        @if ($biodata->isEmpty())
            <div class="student-card empty">Tidak ada siswa ditemukan.</div>
        @endif
    </div>

</div>

</body>
</html>
