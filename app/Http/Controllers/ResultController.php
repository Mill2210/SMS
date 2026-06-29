<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $results = Result::with(['student', 'course'])
            ->when($search, function ($query) use ($search) {

                $query->whereHas('student', function ($q) use ($search) {

                    $q->where('first_name', 'like', "%{$search}%")
                      ->orWhere('last_name', 'like', "%{$search}%")
                      ->orWhere('admission_number', 'like', "%{$search}%");

                });

            })
            ->latest()
            ->get();

        return view('results.index', compact('results'));
    }

public function create()
{
    $students = Student::orderBy('first_name')->get();

    $courses = Course::orderBy('course_name')->get();

    return view('results.create', compact('students', 'courses'));
}

    public function store(Request $request)
    {
        $request->validate([

            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'coursework' => 'required|numeric|min:0|max:40',
            'exam' => 'required|numeric|min:0|max:60',
            'academic_year' => 'required',
            'semester' => 'required',

        ]);

        $total = $request->coursework + $request->exam;

        if ($total >= 70) {
            $grade = 'A';
            $point = 5.0;
            $remark = 'Excellent';
        } elseif ($total >= 60) {
            $grade = 'B+';
            $point = 4.0;
            $remark = 'Very Good';
        } elseif ($total >= 50) {
            $grade = 'B';
            $point = 3.0;
            $remark = 'Good';
        } elseif ($total >= 40) {
            $grade = 'C';
            $point = 2.0;
            $remark = 'Pass';
        } else {
            $grade = 'F';
            $point = 0.0;
            $remark = 'Fail';
        }

        Result::create([

            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'coursework' => $request->coursework,
            'exam' => $request->exam,
            'total' => $total,
            'grade' => $grade,
            'grade_point' => $point,
            'remark' => $remark,
            'academic_year' => $request->academic_year,
            'semester' => $request->semester,

        ]);

        return redirect()
            ->route('results.index')
            ->with('success', 'Result saved successfully.');
    }

    public function edit(Result $result)
    {
        $students = Student::orderBy('first_name')->get();

        $courses = Course::orderBy('course_name')->get();

        return view(
            'results.edit',
            compact('result', 'students', 'courses')
        );
    }

    public function update(Request $request, Result $result)
    {
        $request->validate([

            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'coursework' => 'required|numeric|min:0|max:40',
            'exam' => 'required|numeric|min:0|max:60',
            'academic_year' => 'required',
            'semester' => 'required',

        ]);

        $total = $request->coursework + $request->exam;

        if ($total >= 70) {
            $grade = 'A';
            $point = 5.0;
            $remark = 'Excellent';
        } elseif ($total >= 60) {
            $grade = 'B+';
            $point = 4.0;
            $remark = 'Very Good';
        } elseif ($total >= 50) {
            $grade = 'B';
            $point = 3.0;
            $remark = 'Good';
        } elseif ($total >= 40) {
            $grade = 'C';
            $point = 2.0;
            $remark = 'Pass';
        } else {
            $grade = 'F';
            $point = 0.0;
            $remark = 'Fail';
        }

        $result->update([

            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'coursework' => $request->coursework,
            'exam' => $request->exam,
            'total' => $total,
            'grade' => $grade,
            'grade_point' => $point,
            'remark' => $remark,
            'academic_year' => $request->academic_year,
            'semester' => $request->semester,

        ]);

        return redirect()
            ->route('results.index')
            ->with('success', 'Result updated successfully.');
    }

    public function destroy(Result $result)
    {
        $result->delete();

        return redirect()
            ->route('results.index')
            ->with('success', 'Result deleted successfully.');
    }
}