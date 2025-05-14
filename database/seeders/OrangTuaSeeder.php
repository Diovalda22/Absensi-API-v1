<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrangTuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orang_tua')->insert([
            ['nama' => 'Wakidi', 'no_hp' => '085733051324'],
            ['nama' => 'Siti Aminah', 'no_hp' => '085733051324'],
        ]);
    }
}
