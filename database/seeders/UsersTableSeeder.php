<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'matheus',
                    'email' => 'matheus@gmail.com',
                    'password' => bcrypt('senha123') 
                ],
                [
                    'username' => 'matheus2',
                    'email' => 'matheus2@gmail.com',
                    'password' => bcrypt('senha123') 
                ],
                [
                    'username' => 'matheus3',
                    'email' => 'matheus3@gmail.com',
                    'password' => bcrypt('senha123') 
                ],
                [
                    'username' => 'matheus4',
                    'email' => 'matheus4@gmail.com',
                    'password' => bcrypt('senha123') 
                ]
            ]
        );
    }
}
