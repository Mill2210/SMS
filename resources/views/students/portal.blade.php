<x-app-layout>

<div class="max-w-7xl mx-auto mt-10">

<div class="bg-white rounded-lg shadow p-6">

<div class="flex gap-6">

<div>

@if($student->photo)

<img
src="{{ asset('storage/'.$student->photo) }}"
class="w-40 h-40 rounded-full object-cover border">

@else

<div
class="w-40 h-40 rounded-full bg-gray-200 flex items-center justify-center">

No Photo

</div>

@endif

</div>

<div>

<h2 class="text-3xl font-bold">

{{ $student->first_name }}
{{ $student->middle_name }}
{{ $student->last_name }}

</h2>

<p>

Admission No:
<b>{{ $student->admission_number }}</b>

</p>

<p>

Program:
<b>{{ $student->program->name }}</b>

</p>

<p>

Department:
<b>{{ $student->program->department->name }}</b>

</p>

<p>

Gender:
<b>{{ $student->gender }}</b>

</p>

<p>

Status:
<b>{{ $student->status }}</b>

</p>

</div>

</div>

</div>



<div class="bg-white shadow rounded-lg p-6 mt-8">

<h2 class="text-2xl font-bold mb-4">

Registered Courses

</h2>

<table class="w-full border">

<tr class="bg-gray-100">

<th class="border p-2">

Code

</th>

<th class="border p-2">

Course

</th>

<th class="border p-2">

Credits

</th>

</tr>

@forelse($student->courses as $course)

<tr>

<td class="border p-2">

{{ $course->course_code }}

</td>

<td class="border p-2">

{{ $course->course_name }}

</td>

<td class="border p-2">

{{ $course->credit_hours }}

</td>

</tr>

@empty

<tr>

<td colspan="3"
class="border p-5 text-center">

No registered courses.

</td>

</tr>

@endforelse

</table>

</div>




<div class="bg-white shadow rounded-lg p-6 mt-8">

<h2 class="text-2xl font-bold mb-4">

Academic Results

</h2>

<table class="w-full border">

<tr class="bg-gray-100">

<th class="border p-2">

Course

</th>

<th class="border p-2">

Total

</th>

<th class="border p-2">

Grade

</th>

<th class="border p-2">

Remark

</th>

</tr>

@forelse($student->results as $result)

<tr>

<td class="border p-2">

{{ $result->course->course_code }}

</td>

<td class="border p-2">

{{ $result->total }}

</td>

<td class="border p-2">

{{ $result->grade }}

</td>

<td class="border p-2">

{{ $result->remark }}

</td>

</tr>

@empty

<tr>

<td colspan="4"
class="border p-5 text-center">

No results available.

</td>

</tr>

@endforelse

</table>

</div>

</div>

</x-app-layout>