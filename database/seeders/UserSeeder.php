<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Bimal Adhikari',
            'email' => 'bimaladhikari8158@gmail.com',
            'password' => Hash::make('codewing'),
            'email_verified_at' => '2022-09-19',
        ]);
    }
}
