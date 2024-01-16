<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(30),
            'lecturer_id' => fake()->numberBetween(32,52),
            'semester' => "Ganjil",
            'academic_year' => "2023/2024",
            'sks' => 3,
            'code' => fake()->regexify("[A-Z]{3}[0-9]{3}"),
            'description' => fake()->text(),       
        ];
    }
}
