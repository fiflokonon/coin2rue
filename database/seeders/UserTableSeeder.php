<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'id' =>1,
                'nom' => 'LOKONON',
                'prenoms' => 'Arnaud',
                'email' => 'fiflokonon@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],

            [
                'id' =>2,
                'nom' => 'LOKO',
                'prenoms' => 'Aristofane Smith',
                'email' => 'aristofanesmithloko@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],
            [
                'id' =>3,
                'nom' => 'DOUMEFIO',
                'prenoms' => 'Anne',
                'email' => 'doumefio@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],
            [
                'id' =>4,
                'nom' => 'ALISSOU',
                'prenoms' => 'Fernando',
                'email' => 'alissouanani@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'isDelete' => 0,
            ],

        ]);


        DB::table('model_has_roles')->insert([

            [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 1,
            ],
            [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 2,
            ],
            [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 3,
            ],
            [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 4,
            ],
        ]);


    }
}
