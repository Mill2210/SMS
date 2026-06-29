<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Add Program

</h2>

<form method="POST"
action="{{ route('programs.store') }}">

@csrf

<label class="font-semibold">
Department
</label>

<select
name="department_id"
class="border rounded-lg w-full p-2 mb-4">

@foreach($departments as $department)

<option value="{{ $department->id }}">

{{ $department->name }}

</option>

@endforeach

</select>

<label class="font-semibold">
Program Name
</label>

<input
type="text"
name="name"
class="border rounded-lg w-full p-2 mb-4">

<label class="font-semibold">
Program Code
</label>

<input
type="text"
name="code"
class="border rounded-lg w-full p-2 mb-4">

<label class="font-semibold">
Duration (Years)
</label>

<input
type="number"
name="duration_years"
class="border rounded-lg w-full p-2 mb-4">

<label class="font-semibold">
Description
</label>

<textarea
name="description"
rows="4"
class="border rounded-lg w-full p-2"></textarea>

<button
class="bg-blue-600 text-white px-6 py-2 rounded mt-5">

Save Program

</button>

</form>

</div>

</div>

</x-app-layout>