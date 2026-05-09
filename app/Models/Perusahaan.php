<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_telp'];

    public function biodata()
    {
        return $this->hasMany(BiodataSiswa::class, 'perusahaan_id');
    }
}
