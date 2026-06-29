<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Edit Student Result

</h2>

@if($errors->any())

<div class="bg-red-100 text-red-700 p-4 rounded mb-5">

<ul class="list-disc ml-5">

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<form method="POST" action="{{ route('results.update',$result) }}">

@csrf
@method('PUT')

<label>Student</label>

<select name="student_id"
class="border rounded-lg w-full p-2 mb-4">

@foreach($students as $student)

<option
value="{{ $student->id }}"
{{ $student->id == $result->student_id ? 'selected' : '' }}>

{{ $student->admission_number }}
-
{{ $student->first_name }}
{{ $student->last_name }}

</option>

@endforeach

</select>

<label>Course</label>

<select
name="course_id"
class="border rounded-lg w-full p-2 mb-4">

@foreach($courses as $course)

<option
value="{{ $course->id }}"
{{ $course->id == $result->course_id ? 'selected' : '' }}>

{{ $course->course_code }}
-
{{ $course->course_name }}

</option>

@endforeach

</select>

<label>Coursework</label>

<input
type="number"
step="0.01"
name="coursework"
value="{{ old('coursework',$result->coursework) }}"
class="border rounded-lg w-full p-2 mb-4">

<label>Exam</label>

<input
type="number"
step="0.01"
name="exam"
value="{{ old('exam',$result->exam) }}"
class="border rounded-lg w-full p-2 mb-4">

<label>Academic Year</label>

<input
type="text"
name="academic_year"
value="{{ old('academic_year',$result->academic_year) }}"
class="border rounded-lg w-full p-2 mb-4">

<label>Semester</label>

<select
name="semester"
class="border rounded-lg w-full p-2 mb-5">

<option
value="Semester I"
{{ $result->semester == 'Semester I' ? 'selected' : '' }}>

Semester I

</option>

<option
value="Semester II"
{{ $result->semester == 'Semester II' ? 'selected' : '' }}>

Semester II

</option>

</select>

<button
class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">

Update Result

</button>

<a href="{{ route('results.index') }}"
class="ml-3 bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded">

Cancel

</a>

</form>

</div>

</div>

</x-app-layout>