<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Level::where('level_name', 'Administrator')->first();
        $operator = Level::where('level_name', 'Operator')->first();
        $pimpinan = Level::where('level_name', 'Pimpinan')->first();

        User::create([
            'id_level' => $admin->id,
            'name' => 'Admin',
            'email' => 'admin@laundry.com',
            'password' => Hash::make('admin123'),
        ]);

        User::create([
            'id_level' => $operator->id,
            'name' => 'Operator',
            'email' => 'operator@laundry.com',
            'password' => Hash::make('operator123'),
        ]);

        User::create([
            'id_level' => $pimpinan->id,
            'name' => 'Pimpinan',
            'email' => 'Pimpinan@Laundry.com',
            'password' => Hash::make('pimpinan123'),
        ]);
    }
}
