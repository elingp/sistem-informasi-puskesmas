<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasiens')->insert([
            'user_id' => 3,
            'nik' => '1234567890123456',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
