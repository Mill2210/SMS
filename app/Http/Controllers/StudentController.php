<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function index(Request $request)
{
    $students = Student::with('program')
        ->when($request->search, function($query) use ($request){

            $query->where('first_name','like','%'.$request->search.'%')
                  ->orWhere('last_name','like','%'.$request->search.'%')
                  ->orWhere('admission_number','like','%'.$request->search.'%');

        })
        ->latest()
        ->get();


    return view('students.index', compact('students'));
}


    public function create()
    {
        $programs = Program::all();

        return view('students.create', compact('programs'));
    }


    public function store(Request $request)
    {

        $request->validate([

            'program_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'admission_year' => 'required',
            'photo'=>'nullable|image|max:2048',

        ]);


        $photo = null;


if($request->hasFile('photo'))
{
    $photo = $request->file('photo')
        ->store('students','public');
}

        Student::create([

            'admission_number' => 'STU'.date('Y').rand(1000,9999),

            'program_id' => $request->program_id,

            'first_name' => $request->first_name,

            'middle_name' => $request->middle_name,

            'last_name' => $request->last_name,

            'gender' => $request->gender,

            'date_of_birth' => $request->date_of_birth,

            'phone' => $request->phone,

            'email' => $request->email,

            'address' => $request->address,

            'admission_year' => $request->admission_year,
            'photo'=>$photo,

        ]);


        return redirect()
            ->route('students.index')
            ->with('success','Student registered successfully');

    }


 public function profile(Student $student)
{
    $student->load([
        'program.department',
        'enrollments.course'
    ]);

    return view(
        'students.profile',
        compact('student')
    );
}

public function portal(Student $student)
{
    $student->load([
        'program.department',
        'courses',
        'results.course'
    ]);

    return view(
        'students.portal',
        compact('student')
    );
}


public function show(Student $student)
{
    $student->load('program');

    return view('students.show', compact('student'));
} 
public function edit(Student $student)
{
    $programs = Program::all();

    return view('students.edit', compact('student','programs'));
}

public function update(Request $request, Student $student)
{
    $request->validate([
        'program_id'      => 'required',
        'first_name'      => 'required',
        'last_name'       => 'required',
        'gender'          => 'required',
        'admission_year'  => 'required',
        'photo'           => 'nullable|image|max:2048',
    ]);

    // Update photo if a new one is uploaded
    if ($request->hasFile('photo')) {

        if ($student->photo && \Storage::disk('public')->exists($student->photo)) {
            Storage::disk('public')->delete($student->photo);
        }

        $student->photo = $request->file('photo')->store('students', 'public');
    }

    $student->program_id       = $request->program_id;
    $student->first_name       = $request->first_name;
    $student->middle_name      = $request->middle_name;
    $student->last_name        = $request->last_name;
    $student->gender           = $request->gender;
    $student->date_of_birth    = $request->date_of_birth;
    $student->phone            = $request->phone;
    $student->email            = $request->email;
    $student->address          = $request->address;
    $student->admission_year   = $request->admission_year;
    $student->status           = $request->status;

    $student->save();

    return redirect()
        ->route('students.index')
        ->with('success', 'Student updated successfully.');
}
public function destroy(Student $student)
{
    $student->delete();

    return redirect()
        ->route('students.index')
        ->with('success','Student deleted successfully');
}

}