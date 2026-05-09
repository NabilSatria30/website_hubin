<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Jurnal Siswa | {{ $nama }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/detail-jurnal.css') }}">
</head>
<body>

    <div class="modal fade" id="modalJurnal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content custom-modal">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-dark">Detail Laporan Jurnal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-4">
                    <div class="jurnal-detail-card">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-muted small text-uppercase fw-bold">Nama Siswa</label>
                                <p id="modal-nama" class="fw-semibold text-dark mb-3 fs-5"></p>
                                
                                <label class="text-muted small text-uppercase fw-bold">Jurusan</label>
                                <p id="modal-jurusan" class="text-dark mb-0"></p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <label class="text-muted small text-uppercase fw-bold">Tanggal Kegiatan</label>
                                <p id="modal-tanggal" class="text-primary fw-bold fs-5"></p>
                            </div>
                        </div>

                        <hr class="my-4 opacity-25">

                        <div class="info-section mb-4">
                            <h6 class="fw-bold text-dark mb-2">Materi / Kompetensi</h6>
                            <div class="content-box" id="modal-materi"></div>
                        </div>

                        <div class="info-section mb-4">
                            <h6 class="fw-bold text-dark mb-2">Tugas yang Dikerjakan</h6>
                            <div class="content-box" id="modal-tugas"></div>
                        </div>

                        <div class="photo-section">
                            <h6 class="fw-bold text-dark mb-3">Dokumentasi Foto</h6>
                            <div id="modal-foto" class="text-center photo-wrapper"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper py-5">
        <div class="container">
            <div class="page-header d-flex align-items-center mb-4">
                <a href="{{ url()->previous() }}" class="btn-back me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </a>
                <div class="header-text">
                    <h3 class="fw-bold m-0">Riwayat Jurnal Siswa</h3>
                    <p class="text-muted m-0">{{ $nama }} &bull; {{ $jurusan }}</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm custom-card">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">No</th>
                                <th>Tanggal Laporan</th>
                                <th class="text-end pe-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <td class="ps-4 text-muted">{{ $loop->iteration }}</td>
                                <td class="fw-medium text-dark">{{ $item->tanggal }}</td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-primary btn-lihat rounded-pill px-4 shadow-sm" data-id="{{ $item->id }}">
                                        Lihat Jurnal
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-5 text-muted">Belum ada catatan jurnal untuk siswa ini.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.btn-lihat').forEach(btn => {
            btn.addEventListener('click', function() {
                let id = this.dataset.id;
                
                // State loading
                const originalText = this.innerHTML;
                this.innerHTML = `<span class="spinner-border spinner-border-sm" role="status"></span>`;
                this.disabled = true;

                fetch(`/jurnal/${id}`)
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById('modal-nama').innerText = data.nama;
                        document.getElementById('modal-jurusan').innerText = data.jurusan;
                        document.getElementById('modal-tanggal').innerText = data.tanggal;
                        document.getElementById('modal-materi').innerText = data.materi || '-';
                        document.getElementById('modal-tugas').innerText = data.tugas || '-';

                        const photoContainer = document.getElementById('modal-foto');
                        if (data.foto_kegiatan) {
                            photoContainer.innerHTML = `<img src="/storage/${data.foto_kegiatan}" class="img-fluid rounded-3 shadow-sm border mt-2" style="max-height: 400px; width: 100%; object-fit: cover;">`;
                        } else {
                            photoContainer.innerHTML = `<div class="p-4 bg-light rounded text-muted">Siswa tidak mengunggah foto</div>`;
                        }

                        // Reset button
                        this.innerHTML = originalText;
                        this.disabled = false;

                        // Show Modal
                        let myModal = new bootstrap.Modal(document.getElementById('modalJurnal'));
                        myModal.show();
                    })
                    .catch(err => {
                        console.error(err);
                        this.innerHTML = originalText;
                        this.disabled = false;
                        alert('Gagal memuat data jurnal.');
                    });
            });
        });
    </script>
</body>
</html>