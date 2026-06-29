<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseAllocation;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class CourseAllocationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $allocations = CourseAllocation::with(['lecturer','course'])
            ->when($search, function ($query) use ($search) {
                $query->whereHas('lecturer', function ($q) use ($search) {
                    $q->where('first_name', 'like', "%{$search}%")
                      ->orWhere('last_name', 'like', "%{$search}%");
                })->orWhereHas('course', function ($q) use ($search) {
                    $q->where('course_name', 'like', "%{$search}%")
                      ->orWhere('course_code', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->get();

        return view('course_allocations.index', compact('allocations'));
    }

    public function create()
    {
        $lecturers = Lecturer::orderBy('first_name')->get();
        $courses = Course::orderBy('course_name')->get();

        return view('course_allocations.create', compact('lecturers','courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lecturer_id' => 'required|exists:lecturers,id',
            'course_id' => 'required|exists:courses,id',
            'academic_year' => 'required',
            'semester' => 'required',
        ]);

        CourseAllocation::create($request->all());

        return redirect()
            ->route('course-allocations.index')
            ->with('success','Course allocated successfully.');
    }

    public function edit(CourseAllocation $courseAllocation)
    {
        $lecturers = Lecturer::orderBy('first_name')->get();
        $courses = Course::orderBy('course_name')->get();

        return view(
            'course_allocations.edit',
            compact('courseAllocation','lecturers','courses')
        );
    }

    public function update(Request $request, CourseAllocation $courseAllocation)
    {
        $request->validate([
            'lecturer_id' => 'required|exists:lecturers,id',
            'course_id' => 'required|exists:courses,id',
            'academic_year' => 'required',
            'semester' => 'required',
        ]);

        $courseAllocation->update($request->all());

        return redirect()
            ->route('course-allocations.index')
            ->with('success','Course allocation updated.');
    }

    public function destroy(CourseAllocation $courseAllocation)
    {
        $courseAllocation->delete();

        return redirect()
            ->route('course-allocations.index')
            ->with('success','Course allocation deleted.');
    }
}