<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Carbon\Carbon;

class BiodataSiswa extends Model
{
protected $fillable = [
    'user_id', //table user
    'nama',
    'jurusan',
    'kelas',
    'alamat',
    'no_telp',
    'email',
    'tgl_mulai_pkl',
    'tgl_selesai_pkl',
    'perusahaan_id',
    'divisi',
    'pembimbing_sekolah',
    'pembimbing_perusahaan',
    'foto',
];

// public function getTglMulaiPklAttribute($value)
//     {
//         return $value 
//             ? Carbon::parse($value)->translatedFormat('d F Y') 
//             : '-';
//     }

//     public function getTglSelesaiPklAttribute($value)
//     {
//         return $value 
//             ? Carbon::parse($value)->translatedFormat('d F Y') 
//             : '-';
//     }

    public function jurnal()
    {
        return $this->hasMany(JurnalSiswa::class, 'user_id', 'user_id');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }

}
