<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'role_as' => '1'
            ],
            [
                'id' => 2,
                'name' => 'Riyan',
                'email' => 'riyan@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_as' => '0'
            ],
        );
    }
}
