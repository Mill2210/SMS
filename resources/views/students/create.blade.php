<x-app-layout>

<div class="max-w-4xl mx-auto mt-10">

<h2 class="text-2xl font-bold mb-5">
Register Student
</h2>


<form method="POST" 
action="{{ route('students.store') }}"
enctype="multipart/form-data">

@csrf


<select name="program_id" class="border p-2 w-full">
<option>Select Program</option>

@foreach($programs as $program)

<option value="{{ $program->id }}">
{{ $program->name }}
</option>

@endforeach

</select>


<input name="first_name"
placeholder="First Name"
class="border p-2 w-full mt-3">


<input name="middle_name"
placeholder="Middle Name"
class="border p-2 w-full mt-3">


<input name="last_name"
placeholder="Last Name"
class="border p-2 w-full mt-3">


<select name="gender"
class="border p-2 w-full mt-3">

<option>Male</option>
<option>Female</option>

</select>


<input type="date"
name="date_of_birth"
class="border p-2 w-full mt-3">


<input name="phone"
placeholder="Phone"
class="border p-2 w-full mt-3">


<input name="email"
placeholder="Email"
class="border p-2 w-full mt-3">


<input name="admission_year"
value="{{date('Y')}}"
class="border p-2 w-full mt-3">

<label class="block mt-4 font-semibold">
    Student Photo
</label>

<input 
type="file"
name="photo"
accept="image/*"
class="border p-2 w-full mt-2">

<button class="bg-blue-600 text-white px-5 py-2 mt-5">
Save Student
</button>


</form>

</div>

</x-app-layout>