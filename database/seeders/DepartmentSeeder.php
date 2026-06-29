<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::create([
            'name' => 'Computer Science',
            'code' => 'CS',
            'description' => 'Computer and Information Technology studies'
        ]);

        Department::create([
            'name' => 'Business Administration',
            'code' => 'BA',
            'description' => 'Business and management studies'
        ]);

        Department::create([
            'name' => 'Engineering',
            'code' => 'ENG',
            'description' => 'Engineering programs'
        ]);
    }
}