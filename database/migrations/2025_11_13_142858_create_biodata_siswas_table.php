<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodata_siswas', function (Blueprint $table) {
            $table->id();
            //relasi ke table users
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama');
            $table->string('jurusan');
            $table->text('alamat');
            $table->string('no_telp', 20);
            $table->string('email');
            $table->date('tgl_mulai_pkl');
            $table->date('tgl_selesai_pkl');
            //relasi ke table perusahaan
            $table->unsignedBigInteger('perusahaan_id');
            $table->foreign('perusahaan_id')->references('id')->on('perusahaans')->onDelete('cascade');
            $table->string('divisi');
            $table->string('pembimbing_sekolah');
            $table->string('pembimbing_perusahaan');

            // path foto
            $table->string('foto')->nullable();
            $table->timestamps();

        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_siswas');
    }
};
