<?php

namespace App\Models;

use App\Http\Controllers\BiodataSiswaController;
use Illuminate\Database\Eloquent\Model;

class JurnalSiswa extends Model
{

    protected $fillable = [
        'user_id',
        'nama',
        'jurusan',
        'tanggal',
        'materi',
        'tugas',
        'foto_kegiatan',
    ];
    

    public function biodata()
    {
        return $this->belongsTo(BiodataSiswa::class, 'user_id', 'user_id');
    }

    

}
