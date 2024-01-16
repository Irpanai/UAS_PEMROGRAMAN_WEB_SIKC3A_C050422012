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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subject_id')->unsigned()->default(100); // Dimulai dari 100
            $table->string('hari');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('ruangan');
            $table->string('kode_absensi')->unique()->randomNumber(7); // Nomor acak 7 angka
            $table->string('tahun_akademik');
            $table->string('semester');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by')->nullable(); // Nullable for soft deletes
            $table->timestamps();
        });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
