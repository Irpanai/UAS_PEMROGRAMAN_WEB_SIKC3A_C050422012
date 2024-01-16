<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAsuransiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomor_ktp' => 'sometimes|string',
            'nama_lengkap' => 'sometimes|string',
            'jenis_kelamin' => 'sometimes|string',
            'tempat_lahir' => 'sometimes|string',
            'tanggal_lahir' => 'sometimes|date',
            'status_pernikahan' => 'sometimes|string',
            'nomor_handphone' => 'sometimes|string',
            'npwp' => 'sometimes|string',
            'kewarganegaraan' => 'sometimes|string',
            'kelas' => 'sometimes|string',
            'email' => 'sometimes|email',
            'alamat' => 'sometimes|string',
            'rt' => 'sometimes|string',
            'rw' => 'sometimes|string',
            'kode_pos' => 'sometimes|string',
            'no_telp_rumah' => 'sometimes|string',
            'kelurahan_desa' => 'sometimes|string',
            'nomor_kartu_keluarga' => 'sometimes|string',
            'status_dalam_keluarga' => 'sometimes|string',
            'jumlah_anak' => 'sometimes|integer',
            'rekening' => 'sometimes|string',
            'nomor_rekening' => 'sometimes|string',
            'nama_pemilik_rekening' => 'sometimes|string',
        ];
    }
}
