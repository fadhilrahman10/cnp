<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'username' => 'admin',
        //     'role' => 'ADMIN',
        //     'password' => '123',
        // ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'role' => 'ADMIN',
            'password' => '123',
        ]);
    }
}
