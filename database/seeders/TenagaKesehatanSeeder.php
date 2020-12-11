<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenagaKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenaga_kesehatans')->insert([
            'poli_id' => '1',
            'nama' => 'dr. Supardi',
            'jadwal' => 'Senin 4-5pm, Selasa 6-8pm',
            'no_telepon' => '0815678991',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'poli_id' => 2,
            'nama' => 'drg. Alfreds',
            'jadwal' => 'Kamis 3-5pm, Sabtu 12-3pm',
            'no_telepon' => '081567899',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tenaga_kesehatans')->insert([
            'poli_id' => 3,
            'nama' => 'dr. Akila',
            'jadwal' => 'Rabu 12-3pm, Jumat 6-8pm',
            'no_telepon' => '081567898',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
