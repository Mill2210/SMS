<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $courses = Course::with('program')
            ->when($search, function ($query) use ($search) {
                $query->where('course_name', 'like', "%{$search}%")
                      ->orWhere('course_code', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $programs = Program::all();

        return view('courses.create', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_id'    => 'required',
            'course_code'   => 'required|unique:courses',
            'course_name'   => 'required',
            'year_of_study' => 'required|integer|min:1|max:6',
            'semester'      => 'required',
            'credit_hours'  => 'required|integer|min:1',
        ]);

        Course::create($request->all());

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

public function show(Course $course)
{
    $course->load('program');

    return view('courses.show', compact('course'));
}

    public function edit(Course $course)
    {
        $programs = Program::all();

        return view('courses.edit', compact('course', 'programs'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'program_id'    => 'required',
            'course_code'   => 'required|unique:courses,course_code,' . $course->id,
            'course_name'   => 'required',
            'year_of_study' => 'required|integer|min:1|max:6',
            'semester'      => 'required',
            'credit_hours'  => 'required|integer|min:1',
        ]);

        $course->update($request->all());

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }
}