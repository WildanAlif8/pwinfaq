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
        
        $users = [
            [
                'username' => 'infaq',
                'password' => bcrypt('infaq123'),
                'role' => 'admin',
                'nis' => null,
                'nama' => 'Admin Wikrama',
                'rombel' => null,
                'jumlah' => null
            ],

            [
                'username' => '12108302-ali',
                'password' => bcrypt('ali301'),
                'role' => 'siswa',
                'nis' => '12108301',
                'nama' => 'Ali Nurhakim',
                'rombel' => 'PPLG XII-1',
                'jumlah' => '15.000'
            ],
            [
                'username' => '12108403-elizabeth',
                'password' => bcrypt('eli403'),
                'role' => 'siswa',
                'nis' => '12108403',
                'nama' => 'Elizabeth Andrea Jamco',
                'rombel' => 'PPLG XII-2',
                'jumlah' => '10.000'
            ],
            [
                'username' => '12108305-syafitri',
                'password' => bcrypt('sya305'),
                'role' => 'siswa',
                'nis' => '12108305',
                'nama' => 'Syafitri Nur Cahyani',
                'rombel' => 'PPLG XII-3',
                'jumlah' => '20.000'
            ],
            [
                'username' => '12108626-wildan',
                'password' => bcrypt('wil626'),
                'role' => 'siswa',
                'nis' => '12108626',
                'nama' => 'Wildan Alif',
                'rombel' => 'PPLG XII-4',
                'jumlah' => '12.000'
            ],
            [
                'username' => '12108490-arief',
                'password' => bcrypt('ari490'),
                'role' => 'siswa',
                'nis' => '12108490',
                'nama' => 'Nur Arief',
                'rombel' => 'PPLG XII-5',
                'jumlah' => '23.000'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }

    }
