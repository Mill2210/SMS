<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\Department;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $cs = Department::where('code','CS')->first();

        Program::create([
            'department_id' => $cs->id,
            'name' => 'Bachelor of Computer Science',
            'code' => 'BCS',
            'duration_years' => 4,
            'description' => 'Computer science degree program'
        ]);

        Program::create([
            'department_id' => $cs->id,
            'name' => 'Diploma in Information Technology',
            'code' => 'DIT',
            'duration_years' => 3,
            'description' => 'Information technology diploma'
        ]);

        Program::create([
            'department_id' => $cs->id,
            'name' => 'Diploma in Cybersecurity',
            'code' => 'DIS',
            'duration_years' => 3,
            'description' => 'Cybersecurity in diploma'
        ]);

        Program::create([
            'department_id' => $cs->id,
            'name' => 'Bachelor of Cybersecurity',
            'code' => 'BIS',
            'duration_years' => 3,
            'description' => 'cybersecurity in degree'
        ]);

        Program::create([
            'department_id' => $cs->id,
            'name' => 'Computer Engineering',
            'code' => 'CE',
            'duration_years' => 4,
            'description' => 'Engineering in computer'
        ]);

    }
}