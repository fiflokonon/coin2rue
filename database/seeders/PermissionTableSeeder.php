<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'Add user']);
        Permission::create(['name' => 'Delete user']);
        Permission::create(['name' => 'edit formation']);
        Permission::create(['name' => 'Add formation']);
        Permission::create(['name' => 'Delete formation']);
    }
}
