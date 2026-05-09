<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //untuk menambahkan isi field/kolom/data pada table
    public function run(): void
    {
        $userData = [
            [
                'username'=>'Admins',    
                'password'=>bcrypt('admin123'),
                'role'=>'admin'
            ],
            [
                'username'=>'Gurus',
                'password'=>bcrypt('guru123'),
                'role'=>'guru'
            ],
            [
                'username'=>'Siswa',               //rpl
                'password'=>bcrypt('siswa123'),
                'role'=>'siswa'
            ],
            [
                'username'=>'Siswa1', //rpl
                'password'=>bcrypt('siswa1'),
                'role'=>'siswa'
            ],
            [
                'username'=>'Siswa2', //dkv
                'password'=>bcrypt('siswa2'),
                'role'=>'siswa'
            ],
                        [
                'username'=>'Siswa3', //dkv
                'password'=>bcrypt('siswa3'),
                'role'=>'siswa'
            ],
            [
                'username'=>'Siswa4', 
                'password'=>bcrypt('siswa4'),
                'role'=>'siswa'
            ],
            [
                'username'=>'Siswa5', 
                'password'=>bcrypt('siswa5'),
                'role'=>'siswa'
            ],
            [
                'username'=>'Siswa6', 
                'password'=>bcrypt('siswa6'),
                'role'=>'siswa'
            ],
                        
            [
                'username'=>'Siswa7', 
                'password'=>bcrypt('siswa7'),
                'role'=>'siswa'
            ],
            [
                'username'=>'gururpl', 
                'password'=>bcrypt('gururpl'),
                'role'=>'guru',
                'jurusan'=>'Rekayasa Perangkat Lunak',
            ],
            [
                'username'=>'gurudkv', 
                'password'=>bcrypt('gurudkv'),
                'role'=>'guru',
                'jurusan'=>'Desain Komunikasi Visual',
            ],
                        [
                'username'=>'gurusija', 
                'password'=>bcrypt('gurusija'),
                'role'=>'guru',
                'jurusan'=>'Sistem Informasi Jaringan Dan Aplikasi',
            ],
                        [
                'username'=>'gurutkj', 
                'password'=>bcrypt('gurutkj'),
                'role'=>'guru',
                'jurusan'=>'Teknik Komputer Dan Jaringan',
            ],
            
        ];

        //akan memasukan
        foreach ($userData as $val) {
            User::updateOrCreate(
                ['username' => $val['username']], // Cek apakah username sudah ada
                $val// Update atau insert
            );
        }
    }
}
