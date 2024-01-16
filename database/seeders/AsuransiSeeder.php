<?php

namespace Database\Seeders;
use App\Models\Asuransi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asuransi::factory(6)->create();
    }
}
