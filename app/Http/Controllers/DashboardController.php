<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Program;
use App\Models\Department;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [

            'students' => Student::count(),

            'courses' => Course::count(),

            'programs' => Program::count(),

            'departments' => Department::count(),

            'recentStudents' => Student::with('program')
    ->latest()
    ->take(5)
    ->get(),

        ]);
    }
}
