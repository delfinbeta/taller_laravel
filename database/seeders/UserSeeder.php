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
            'name' => 'Dayan Betancourt',
            'email' => 'dkbetancourt@gmail.com',
            'password' => Hash::make('dayan123')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Juan Betancourt',
            'email' => 'juanb@gmail.com',
            'password' => Hash::make('juanito123')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Carlos Mora',
            'email' => 'cgmora@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
}
