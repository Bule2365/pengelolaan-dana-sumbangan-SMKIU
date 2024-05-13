<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat data admin
        User::create([
            'name' => 'bule1234',
            'email' => 'adminbule@gmail.com',
            'password' => Hash::make('adminbule'),
            'birthdate' => '2000-01-01',
            'number_phone' => '088765445677587',
            'address' => 'jl.persatuan',
            'gender' => 'laki-laki',
            'role' => 'admin',
            // Tambahkan kolom lain sesuai kebutuhan
        ]);
    }
}
