<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data pengguna dengan username
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin123'), // Ganti password dengan password yang diinginkan
        ]);

        User::create([
            'name' => 'Wildan',
            'username' => 'wilip',
            'password' => Hash::make('wilip123'),
        ]);

    }
}
