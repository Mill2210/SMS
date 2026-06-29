<x-app-layout>

<div class="max-w-4xl mx-auto mt-10 px-4">


<h2 class="text-3xl font-bold mb-6">
    Edit Student
</h2>


<form method="POST"
action="{{ route('students.update',$student) }}"
class="bg-white shadow rounded-lg p-6">

@csrf
@method('PUT')


<label class="block mb-2 font-semibold">
Program
</label>

<select name="program_id"
class="border rounded p-3 w-full mb-4">


@foreach($programs as $program)

<option value="{{ $program->id }}"
@if($student->program_id == $program->id)
selected
@endif>

{{ $program->name }}

</option>

@endforeach

</select>



<input 
name="first_name"
value="{{ $student->first_name }}"
placeholder="First Name"
class="border rounded p-3 w-full mb-4">


<input 
name="middle_name"
value="{{ $student->middle_name }}"
placeholder="Middle Name"
class="border rounded p-3 w-full mb-4">


<input 
name="last_name"
value="{{ $student->last_name }}"
placeholder="Last Name"
class="border rounded p-3 w-full mb-4">



<select name="gender"
class="border rounded p-3 w-full mb-4">

<option value="Male"
@if($student->gender=="Male") selected @endif>
Male
</option>

<option value="Female"
@if($student->gender=="Female") selected @endif>
Female
</option>

</select>



<input 
type="date"
name="date_of_birth"
value="{{ $student->date_of_birth }}"
class="border rounded p-3 w-full mb-4">



<input 
name="phone"
value="{{ $student->phone }}"
placeholder="Phone"
class="border rounded p-3 w-full mb-4">



<input 
name="email"
value="{{ $student->email }}"
placeholder="Email"
class="border rounded p-3 w-full mb-4">



<select name="status"
class="border rounded p-3 w-full mb-6">


<option value="Active"
@if($student->status=="Active") selected @endif>
Active
</option>


<option value="Graduated"
@if($student->status=="Graduated") selected @endif>
Graduated
</option>


<option value="Deferred"
@if($student->status=="Deferred") selected @endif>
Deferred
</option>


<option value="Inactive"
@if($student->status=="Inactive") selected @endif>
Inactive
</option>


</select>



<button
class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">

Update Student

</button>


</form>


</div>


</x-app-layout>