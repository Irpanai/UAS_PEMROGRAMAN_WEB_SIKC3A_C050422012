<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAsuransiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nomor_ktp' => 'required|string',
            'nama_lengkap' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'string',
            'status_pernikahan' => 'required|string',
            'nomor_handphone' => 'required|string',
            'npwp' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'kelas' => 'required|string',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'kode_pos' => 'required|string',
            'no_telp_rumah' => 'required|string',
            'kelurahan_desa' => 'required|string',
            'nomor_kartu_keluarga' => 'required|string',
            'status_dalam_keluarga' => 'required|string',
            'jumlah_anak' => 'required|integer',
            'rekening' => 'required|string',
            'nomor_rekening' => 'required|string',
            'nama_pemilik_rekening' => 'required|string',
        ];
    }
}
