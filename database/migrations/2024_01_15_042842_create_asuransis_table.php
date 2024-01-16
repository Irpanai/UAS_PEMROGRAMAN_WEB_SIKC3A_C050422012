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
        Schema::create('asuransis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_ktp');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('status_pernikahan');
            $table->string('nomor_handphone');
            $table->string('npwp');
            $table->string('kewarganegaraan');
            $table->string('kelas');
            $table->string('email');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kode_pos');
            $table->string('no_telp_rumah');
            $table->string('kelurahan_desa');
            $table->string('nomor_kartu_keluarga');
            $table->string('status_dalam_keluarga');
            $table->integer('jumlah_anak');
            $table->string('rekening');
            $table->string('nomor_rekening');
            $table->string('nama_pemilik_rekening');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asuransis');
    }
};
