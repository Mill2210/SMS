<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Super Admin',
            'description' => 'Full system access'
        ]);

        Role::create([
            'name' => 'Registrar',
            'description' => 'Manage students and academics'
        ]);

        Role::create([
            'name' => 'Lecturer',
            'description' => 'Manage classes and results'
        ]);

        Role::create([
            'name' => 'Finance Officer',
            'description' => 'Manage payments and fees'
        ]);

        Role::create([
            'name' => 'Student',
            'description' => 'Student portal access'
        ]);
    }
}