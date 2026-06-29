<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Allocate Course

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

<form method="POST"
action="{{ route('course-allocations.store') }}">

@csrf

<label class="font-semibold">
Lecturer
</label>

<select
name="lecturer_id"
class="border rounded-lg w-full p-2 mb-4">

@foreach($lecturers as $lecturer)

<option value="{{ $lecturer->id }}">

{{ $lecturer->staff_number }} -
{{ $lecturer->first_name }}
{{ $lecturer->last_name }}

</option>

@endforeach

</select>

<label class="font-semibold">
Course
</label>

<select
name="course_id"
class="border rounded-lg w-full p-2 mb-4">

@foreach($courses as $course)

<option value="{{ $course->id }}">

{{ $course->course_code }} -
{{ $course->course_name }}

</option>

@endforeach

</select>

<label class="font-semibold">
Academic Year
</label>

<input
type="text"
name="academic_year"
value="{{ date('Y') }}/{{ date('Y')+1 }}"
class="border rounded-lg w-full p-2 mb-4">

<label class="font-semibold">
Semester
</label>

<select
name="semester"
class="border rounded-lg w-full p-2 mb-5">

<option value="Semester I">Semester I</option>
<option value="Semester II">Semester II</option>

</select>

<button
class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">

Save Allocation

</button>

</form>

</div>

</div>

</x-app-layout>