<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">
Add Lecturer
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
action="{{ route('lecturers.store') }}"
enctype="multipart/form-data">

@csrf

<label>Department</label>

<select
name="department_id"
class="border rounded-lg w-full p-2 mb-4">

@foreach($departments as $department)

<option value="{{ $department->id }}">

{{ $department->name }}

</option>

@endforeach

</select>

<input
type="text"
name="staff_number"
placeholder="Staff Number"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="first_name"
placeholder="First Name"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="last_name"
placeholder="Last Name"
class="border rounded-lg w-full p-2 mb-4">

<input
type="email"
name="email"
placeholder="Email"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="phone"
placeholder="Phone"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="qualification"
placeholder="Qualification"
class="border rounded-lg w-full p-2 mb-4">

<label>Photo</label>

<input
type="file"
name="photo"
class="border rounded-lg w-full p-2 mb-4">

<button
class="bg-blue-600 text-white px-6 py-2 rounded">

Save Lecturer

</button>

</form>

</div>

</div>

</x-app-layout>