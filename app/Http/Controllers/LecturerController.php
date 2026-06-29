<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $lecturers = Lecturer::with('department')
            ->when($search, function ($query) use ($search) {
                $query->where('staff_number', 'like', "%{$search}%")
                      ->orWhere('first_name', 'like', "%{$search}%")
                      ->orWhere('last_name', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();

        return view('lecturers.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'staff_number' => 'required|unique:lecturers',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:lecturers',
            'phone' => 'nullable',
            'qualification' => 'nullable',
            'photo' => 'nullable|image|max:2048',
        ]);

        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('lecturers', 'public');
        }

        Lecturer::create([
            'department_id' => $request->department_id,
            'staff_number' => $request->staff_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'photo' => $photo,
            'status' => 'Active',
        ]);

        return redirect()
            ->route('lecturers.index')
            ->with('success', 'Lecturer created successfully.');
    }

    public function edit(Lecturer $lecturer)
    {
        $departments = Department::orderBy('name')->get();

        return view('lecturers.edit', compact('lecturer', 'departments'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'staff_number' => 'required|unique:lecturers,staff_number,' . $lecturer->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:lecturers,email,' . $lecturer->id,
            'phone' => 'nullable',
            'qualification' => 'nullable',
            'photo' => 'nullable|image|max:2048',
        ]);

        $photo = $lecturer->photo;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('lecturers', 'public');
        }

        $lecturer->update([
            'department_id' => $request->department_id,
            'staff_number' => $request->staff_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'photo' => $photo,
        ]);

        return redirect()
            ->route('lecturers.index')
            ->with('success', 'Lecturer updated successfully.');
    }

    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();

        return redirect()
            ->route('lecturers.index')
            ->with('success', 'Lecturer deleted successfully.');
    }
}