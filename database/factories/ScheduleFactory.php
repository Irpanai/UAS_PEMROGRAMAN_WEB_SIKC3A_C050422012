<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        // Incremental variable untuk subject_id
        static $subjectId = 46;

        return [
            'subject_id' => $subjectId++,
            'hari' => fake()->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']),
            'jam_mulai' => fake()->dateTimeBetween('07:00', '12:00')->format('H:00'),
            'jam_selesai' => fake()->dateTimeBetween('07:00', '14:00')->format('H:00'),
            'ruangan' => 'A' . fake()->numberBetween(1, 10), // Ruangan A1 hingga A10
            'kode_absensi' => fake()->unique()->randomNumber(7), // Nomor acak 7 angka
            'tahun_akademik' => '2023/2024',
            'semester' => fake()->randomElement(['Ganjil', 'Genap']),
            'created_by' => fake()->randomElement([1, 2, 3]),
            'updated_by' => fake()->randomElement([1, 2, 3]),
            'deleted_by' => null,
        ];
    }
}
