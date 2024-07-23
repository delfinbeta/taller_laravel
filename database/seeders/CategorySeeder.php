<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['name' => 'Programación']);
        DB::table('categories')->insert(['name' => 'Cocina']);
        DB::table('categories')->insert(['name' => 'Deportes']);
        DB::table('categories')->insert(['name' => 'Salud']);
    }
}
