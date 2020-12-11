<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        // Adding permissions via a role
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@sip-meomeo.com';
        $user->password = Hash::make('admin');
        $user->assignRole('admin');
        $user->save();

        $user = new User;
        $user->name = 'Sitti Maemuna';
        $user->email = 'smaemuna@sip-meomeo.com';
        $user->password = Hash::make('petugas');
        $user->assignRole('petugas');
        $user->save();

        $user = new User;
        $user->name = 'Hamdani Al-Ikhsan';
        $user->email = 'hikhsan@gmail.com';
        $user->password = Hash::make('pasien');
        $user->assignRole('pasien');
        $user->save();
    }
}
