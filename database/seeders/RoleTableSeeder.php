<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Utilisateur']);
        Role::create(['name' => 'Administrateur']);
        Role::create(['name' => 'Super-Administrateur']);
        Role::create(['name' => 'Formateur']);
    }
}
