<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'guru', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'siswa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
