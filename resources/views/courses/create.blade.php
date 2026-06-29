<x-app-layout>

<div class="max-w-4xl mx-auto mt-10">


<h2 class="text-2xl font-bold mb-5">
Add Course
</h2>


<form method="POST" action="{{route('courses.store')}}">

@csrf


<select name="program_id"
class="border p-2 w-full">

<option>Select Program</option>

@foreach($programs as $program)

<option value="{{$program->id}}">
{{$program->name}}
</option>

@endforeach

</select>



<input name="course_code"
placeholder="Course Code"
class="border p-2 w-full mt-3">



<input name="course_name"
placeholder="Course Name"
class="border p-2 w-full mt-3">



<input name="year_of_study"
placeholder="Year of Study"
class="border p-2 w-full mt-3">



<select name="semester"
        class="w-full border rounded-lg px-4 py-3">

    <option value="">Select Semester</option>

    <option value="Semester I"
        {{ old('semester') == 'Semester I' ? 'selected' : '' }}>
        Semester I
    </option>

    <option value="Semester II"
        {{ old('semester') == 'Semester II' ? 'selected' : '' }}>
        Semester II
    </option>

</select>

<input name="credit_hours"
placeholder="Credit Hours"
class="border p-2 w-full mt-3">



<button class="bg-blue-600 text-white px-5 py-2 mt-5 rounded">

Save Course

</button>


</form>


</div>


</x-app-layout>