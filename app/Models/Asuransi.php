<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Subject as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Asuransi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_ktp',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'status_pernikahan',
        'nomor_handphone',
        'npwp',
        'kewarganegaraan',
        'kelas',
        'email',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'no_telp_rumah',
        'kelurahan_desa',
        'nomor_kartu_keluarga',
        'status_dalam_keluarga',
        'jumlah_anak',
        'rekening',
        'nomor_rekening',
        'nama_pemilik_rekening'
    ];

    public function asuransi()
    {
        return $this->belongsTo(Asuransi::class);
    }
}
