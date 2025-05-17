<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        // Ambil role berdasarkan nama
        $adminRole = \App\Models\Role::where('name', 'admin')->first();
        $guruRole = \App\Models\Role::where('name', 'guru')->first();
        $siswaRole = \App\Models\Role::where('name', 'siswa')->first();

        // Tambah user sesuai role
        \App\Models\User::create([
            'name' => 'Admin Satu',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
        ]);

        \App\Models\User::create([
            'name' => 'Guru Satu',
            'email' => 'guru@example.com',
            'password' => bcrypt('password'),
            'role_id' => $guruRole->id,
        ]);

        \App\Models\User::create([
            'name' => 'Siswa Satu',
            'email' => 'siswa@example.com',
            'password' => bcrypt('password'),
            'role_id' => $siswaRole->id,
        ]);
    }
}
