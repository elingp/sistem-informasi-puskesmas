<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        ]);
        DB::table('polis')->insert([
            'nama' => 'Gigi',
        ]);
        DB::table('polis')->insert([
            'nama' => 'KIA',
        ]);
    }
}
