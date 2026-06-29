<x-app-layout>

<div class="max-w-4xl mx-auto mt-10">


<h2 class="text-2xl font-bold mb-5">
Student Profile
</h2>


<div class="mb-6">

@if($student->photo)

<img 
src="{{ asset('storage/'.$student->photo) }}"
class="w-32 h-32 rounded-full object-cover border shadow">

@else

<div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center">

<span class="text-gray-500">
No Photo
</span>

</div>

@endif

</div>

<a href="{{ route('students.idcard',$student) }}"
class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow mb-5">

🪪 Generate ID Card

</a>
<div class="bg-white shadow p-6">


<p>
<strong>Admission Number:</strong>
{{$student->admission_number}}
</p>


<p>
<strong>Name:</strong>
{{$student->first_name}}
{{$student->middle_name}}
{{$student->last_name}}
</p>


<p>
<strong>Gender:</strong>
{{$student->gender}}
</p>


<p>
<strong>Date of Birth:</strong>
{{$student->date_of_birth}}
</p>


<p>
<strong>Phone:</strong>
{{$student->phone}}
</p>


<p>
<strong>Email:</strong>
{{$student->email}}
</p>


<p>
<strong>Program:</strong>
{{$student->program->name}}
</p>


<p>
<strong>Department:</strong>
{{$student->program->department->name}}
</p>


<p>
<strong>Admission Year:</strong>
{{$student->admission_year}}
</p>


<p>
<strong>Status:</strong>
{{$student->status}}
</p>

<hr class="my-8">

<h2 class="text-xl font-bold mb-4">

Registered Courses

</h2>

@if($student->enrollments->count())

<table class="w-full border">

<thead>

<tr class="bg-gray-100">

<th class="border p-2">
Course Code
</th>

<th class="border p-2">
Course Name
</th>

<th class="border p-2">
Academic Year
</th>

<th class="border p-2">
Semester
</th>

</tr>

</thead>

<tbody>

@foreach($student->enrollments as $enrollment)

<tr>

<td class="border p-2">
{{ $enrollment->course->course_code }}
</td>

<td class="border p-2">
{{ $enrollment->course->course_name }}
</td>

<td class="border p-2">
{{ $enrollment->academic_year }}
</td>

<td class="border p-2">
{{ $enrollment->semester }}
</td>

</tr>

@endforeach

</tbody>

</table>

@else

<div class="bg-yellow-100 text-yellow-700 p-4 rounded">

This student has not registered for any courses.

</div>

@endif

</div>


</div>


</x-app-layout>