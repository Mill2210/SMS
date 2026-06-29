<x-app-layout>

<div class="max-w-4xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Enter Student Results

</h2>

@if($errors->any())

<div class="bg-red-100 text-red-700 p-4 rounded mb-5">

<ul>

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif


<form method="POST"
action="{{ route('results.store') }}">

@csrf


<label class="font-semibold">

Student

</label>

<select
id="student"
name="student_id"
class="border rounded-lg w-full p-2 mb-5">

<option value="">

Select Student

</option>

@foreach($students as $student)

<option
value="{{ $student->id }}">

{{ $student->admission_number }}
-
{{ $student->first_name }}
{{ $student->last_name }}

</option>

@endforeach

</select>



<label class="font-semibold">

Course

</label>

<select
id="course"
name="course_id"
class="border rounded-lg w-full p-2 mb-5">

<option>

Select Course

</option>

</select>



<label>

Coursework (40)

</label>

<input
type="number"
step="0.01"
max="40"
name="coursework"
class="border rounded-lg w-full p-2 mb-4">


<label>

Exam (60)

</label>

<input
type="number"
step="0.01"
max="60"
name="exam"
class="border rounded-lg w-full p-2 mb-4">


<label>

Academic Year

</label>

<input
type="text"
name="academic_year"
value="{{ date('Y') }}/{{ date('Y')+1 }}"
class="border rounded-lg w-full p-2 mb-4">


<label>

Semester

</label>

<select
name="semester"
class="border rounded-lg w-full p-2 mb-5">

<option>

Semester I

</option>

<option>

Semester II

</option>

</select>


<button
class="bg-blue-600 text-white px-6 py-2 rounded">

Save Result

</button>

</form>

</div>

</div>


<script>

const students = @json($students);

document
.getElementById('student')
.addEventListener('change', function(){

let student = students.find(
s => s.id == this.value
);

let course = document.getElementById('course');

course.innerHTML = '';

if(student){

student.courses.forEach(function(c){

course.innerHTML += `
<option value="${c.id}">
${c.course_code} - ${c.course_name}
</option>
`;

});

}

});

</script>

</x-app-layout>