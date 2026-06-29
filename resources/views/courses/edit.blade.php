<x-app-layout>

<div class="max-w-4xl mx-auto mt-10">


<h2 class="text-2xl font-bold mb-5">
Edit Course
</h2>


<form method="POST"
action="{{route('courses.update',$course)}}">

@csrf
@method('PUT')


<select name="program_id"
class="border p-2 w-full">


@foreach($programs as $program)

<option value="{{$program->id}}"
@if($course->program_id == $program->id)
selected
@endif>

{{$program->name}}

</option>


@endforeach


</select>



<input name="course_code"
value="{{$course->course_code}}"
class="border p-2 w-full mt-3">



<input name="course_name"
value="{{$course->course_name}}"
class="border p-2 w-full mt-3">



<input name="year_of_study"
value="{{$course->year_of_study}}"
class="border p-2 w-full mt-3">



<select name="semester"
class="border p-2 w-full mt-3">

<option {{$course->semester=="Semester I"?'selected':''}}>
Semester 1
</option>

<option {{$course->semester=="Semester II"?'selected':''}}>
Semester 2
</option>

</select>



<input name="credit_hours"
value="{{$course->credit_hours}}"
class="border p-2 w-full mt-3">



<button class="bg-green-600 text-white px-5 py-2 mt-5 rounded">

Update Course

</button>


</form>


</div>

</x-app-layout>