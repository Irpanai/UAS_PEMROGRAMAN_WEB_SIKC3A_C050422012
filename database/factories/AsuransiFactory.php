<?php
// AsuransiFactory.php

namespace Database\Factories;

use App\Models\Asuransi;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsuransiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asuransi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_ktp' => $this->faker->numerify('637##########'),
            'nama_lengkap' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'status_pernikahan' => $this->faker->randomElement(['Menikah', 'Belum Menikah']),
            'nomor_handphone' => $this->faker->phoneNumber,
            'npwp' => $this->faker->numerify('##.###.###.#-###.###'),
            'kewarganegaraan' => 'Indonesia', // Asumsikan semuanya WNI
            'kelas' => $this->faker->randomElement(['I', 'II', 'III']),
            'email' => $this->faker->email,
            'alamat' => $this->faker->streetAddress,
            'rt' => $this->faker->numberBetween(0, 13),
            'rw' => $this->faker->numberBetween(0, 6),
            'kode_pos' => $this->faker->postcode,
            'no_telp_rumah' => $this->faker->phoneNumber,
            'kelurahan_desa' => $this->faker->streetName,
            'nomor_kartu_keluarga' => $this->faker->numerify('##########'),
            'status_dalam_keluarga' => $this->faker->randomElement(['Kepala Keluarga', 'Anak', 'Istri/Suami']),
            'jumlah_anak' => $this->faker->numberBetween(0, 5),
            'rekening' => $this->faker->randomElement(['BNI', 'BCA', 'BSI', 'MANDIRI', 'BRI']),
            'nomor_rekening' => $this->faker->numerify('############'),
            'nama_pemilik_rekening' => $this->faker->name,
        ];
    }
}
