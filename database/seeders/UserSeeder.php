<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user')->insert(
            [
                'firstname' => 'Kevin',
                'lastname' => 'Naserwan',
                'email' => 'kevinnaserwan@gmail.com',
                'password' => 'Kevin1234',
                'created_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
