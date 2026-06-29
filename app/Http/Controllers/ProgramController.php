<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $programs = Program::with('department')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('code', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();

        return view('programs.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'name' => 'required',
            'code' => 'required|unique:programs',
            'duration_years' => 'required|integer|min:1|max:8',
            'description' => 'nullable',
        ]);

        Program::create($request->all());

        return redirect()->route('programs.index')
            ->with('success', 'Program created successfully.');
    }

    public function edit(Program $program)
    {
        $departments = Department::orderBy('name')->get();

        return view('programs.edit', compact('program', 'departments'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'name' => 'required',
            'code' => 'required|unique:programs,code,' . $program->id,
            'duration_years' => 'required|integer|min:1|max:8',
            'description' => 'nullable',
        ]);

        $program->update($request->all());

        return redirect()->route('programs.index')
            ->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->route('programs.index')
            ->with('success', 'Program deleted successfully.');
    }
}