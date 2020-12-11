<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polis')->insert([
            'nama' => 'Umum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('polis')->insert([
            'nama' => 'Gigi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('polis')->insert([
            'nama' => 'KIA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
