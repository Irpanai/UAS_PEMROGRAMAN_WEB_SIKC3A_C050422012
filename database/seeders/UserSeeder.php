<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory(45)->create([
            'roles' => 'mahasiswa',
        ]);

        User::create([
            'name' => 'Irfan',
            'email' => 'c050422012@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('vokasi@123'),
            'roles' => 'mahasiswa',
        ]);

        User::factory(45)->create([
            'roles' => 'dosen',
        ]);

        User::create([
            'name' => 'Arifin',
            'email' => 'c030322999@dosen.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('vokasi@321'),
            'roles' => 'dosen',
        ]);
    }
}
