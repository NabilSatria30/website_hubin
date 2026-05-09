<?php

use App\Http\Controllers\BiodataAdminController;
use App\Http\Controllers\BiodataSiswaController;
use App\Http\Controllers\GuruJurusanController;
use App\Http\Controllers\JurnalAdminController;
use App\Http\Controllers\JurnalSiswaController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\ExportPerusahaanController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// LOGIN
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login'])->name('login.action');
Route::get('/logout', [SesiController::class, 'logout']);

// Dashboard siswa
Route::get('/dashboard_siswa', [BiodataSiswaController::class, 'index'])
    ->name('dashboard_siswa')
    ->middleware('cekrole:siswa');

// Form Biodata
Route::get('/biodata', [BiodataSiswaController::class, 'create'])
    ->name('biodata.create')
    ->middleware('cekrole:siswa');
Route::post('/biodata', [BiodataSiswaController::class, 'store'])
    ->name('biodata.store')
    ->middleware('cekrole:siswa');

// FORM JURNAL
Route::get('/jurnal', [JurnalSiswaController::class, 'create'])
    ->name('jurnal.create')
    ->middleware('cekrole:siswa');
Route::post('/jurnal', [JurnalSiswaController::class, 'store'])
    ->name('jurnal.store')
    ->middleware('cekrole:siswa');
// RIWAYAT JURNAL
Route::get('/jurnal/list', [JurnalSiswaController::class, 'index'])
    ->name('jurnal.list')
    ->middleware('cekrole:siswa');
// DOWNLOAD JURNAL BERDASARKAN ID
Route::get('/jurnal/download/{id}', [JurnalSiswaController::class, 'download'])
    ->name('jurnal.download')
    ->middleware('cekrole:siswa');


/* ==============================
      BAGIAN ADMIN
============================== */

Route::view('/dashboard_admin', 'Admin.dashboard_admin')
->name('dashboard_admin')
->middleware('cekrole:admin');

//untuk jurusan
Route::get('/admin/rpl', [BiodataAdminController::class, 'rpl'])->name('admin.rpl');
Route::get('/admin/dkv', [BiodataAdminController::class, 'dkv'])->name('admin.dkv');
Route::get('/admin/sija', [BiodataAdminController::class, 'sija'])->name('admin.sija');
Route::get('/admin/tkj', [BiodataAdminController::class, 'tkj'])->name('admin.tkj');

// PILIH JURUSAN
Route::view('/pilih_jurusan_biodata', 'Admin.pilih_jurusan_biodata')->name('pilih_jurusan_biodata');
Route::view('/pilih_jurusan_jurnal', 'Admin.pilih_jurusan_jurnal')->name('pilih_jurusan_jurnal');

// HASIL JURNAL (tetap view)
// ==========================
// ADMIN – LIST PER JURUSAN
// ==========================
Route::get('/hasiljurnal/rpl', [JurnalAdminController::class, 'rpl'])
    ->name('hasiljurnal.rpl');
Route::get('/hasiljurnal/dkv', [JurnalAdminController::class, 'dkv'])
    ->name('hasiljurnal.dkv');
Route::get('/hasiljurnal/sija', [JurnalAdminController::class, 'sija'])
    ->name('hasiljurnal.sija');
Route::get('/hasiljurnal/tkj', [JurnalAdminController::class, 'tkj'])
    ->name('hasiljurnal.tkj');
// ==========================
// DETAIL JURNAL PER SISWA
Route::get('/detailjurnal/{user_id}', [JurnalAdminController::class, 'detail'])
    ->name('hasiljurnal.detail');


//HASIL BIODATA (Controller)
Route::get('/hasilbiodatarpl', [BiodataAdminController::class, 'rpl'])->name('hasilbiodatarpl');
Route::get('/hasilbiodatadkv', [BiodataAdminController::class, 'dkv'])->name('hasilbiodatadkv');
Route::get('/hasilbiodatasija', [BiodataAdminController::class, 'sija'])->name('hasilbiodatasija');
Route::get('/hasilbiodatatkj', [BiodataAdminController::class, 'tkj'])->name('hasilbiodatatkj');

// EDIT + UPDATE Biodata
Route::get('/admin/biodata/edit/{id}', [BiodataAdminController::class, 'edit'])
    ->name('Admin.editBiodata');
Route::post('/admin/biodata/update/{id}', [BiodataAdminController::class, 'update'])
    ->name('admin.updateBiodata');

//HASIL JURNAL
Route::get('/hasiljurnalrpl', [JurnalAdminController::class, 'rpl'])->name('hasiljurnalrpl');
Route::get('/hasiljurnaldkv', [JurnalAdminController::class, 'dkv'])->name('hasiljurnaldkv');
Route::get('/hasiljurnalsija', [JurnalAdminController::class, 'sija'])->name('hasiljurnalsija');
Route::get('/hasiljurnaltkj', [JurnalAdminController::class, 'tkj'])->name('hasiljurnaltkj');
Route::middleware(['cekrole:admin'])->group(function () {
    Route::get('/admin/jurnal/{id}', [JurnalAdminController::class, 'showJson']);
});


//role guru
Route::middleware(['cekrole:guru'])->group(function () {

    Route::get('/dashboard_gurujurusan', [GuruJurusanController::class, 'index'])
        ->name('dashboard_gurujurusan');
    Route::get('/guru/biodata', [GuruJurusanController::class, 'biodata'])->name('guru.biodata');
    Route::get('/guru/jurnal', [GuruJurusanController::class, 'jurnal'])->name('guru.jurnal');
    Route::get('/guru/jurnal/{user_id}', [GuruJurusanController::class, 'detailJurnal'])
        ->name('guru.jurnal.detail');
    Route::middleware(['auth'])->get('/jurnal/{id}', [JurnalAdminController::class, 'showJson']);
 });


//bagian perusahaan
Route::middleware(['cekrole:admin'])->group(function () {

    Route::get('/mitra', [PerusahaanController::class, 'index'])->name('mitra.index');
    Route::get('/mitra/create', [PerusahaanController::class, 'create'])->name('mitra.create');
    Route::post('/mitra/store', [PerusahaanController::class, 'store'])->name('mitra.store');
    Route::get('/mitra/edit/{id}', [PerusahaanController::class, 'edit'])->name('mitra.edit');
    Route::post('/mitra/update/{id}', [PerusahaanController::class, 'update'])->name('mitra.update');
    Route::get('/mitra/delete/{id}', [PerusahaanController::class, 'delete'])->name('mitra.delete');
    Route::get('/mitra/{id}', [PerusahaanController::class, 'detail'])->name('mitra.detail');
    Route::get('/mitra/{id}/download-excel', [ExportPerusahaanController::class, 'downloadExcel'])
    ->name('mitra.download');



    Route::get('/mitra/{id}/download', [ExportPerusahaanController::class, 'downloadExcel'])
    ->name('mitra.download');
});
