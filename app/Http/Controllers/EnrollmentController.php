<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['student', 'course'])->latest()->get();

        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
{
    $students = Student::with('program')->orderBy('first_name')->get();

    $courses = Course::with('program')->get();

    return view(
        'enrollments.create',
        compact('students', 'courses')
    );
}

 public function store(Request $request)
{
    $request->validate([

        'student_id'     => 'required|exists:students,id',
        'course_id'      => 'required|exists:courses,id',
        'academic_year'  => 'required',
        'semester'       => 'required',

    ]);

    Enrollment::create([

        'student_id'     => $request->student_id,
        'course_id'      => $request->course_id,
        'academic_year'  => $request->academic_year,
        'semester'       => $request->semester,

    ]);

    return redirect()
        ->route('enrollments.index')
        ->with('success', 'Course registered successfully.');

}
}