<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Edit Department

</h2>

<form
method="POST"
action="{{ route('departments.update',$department) }}">

@csrf
@method('PUT')

<label class="font-semibold">

Department Name

</label>

<input
type="text"
name="name"
value="{{ $department->name }}"
class="border rounded-lg w-full p-2 mb-4"
required>

<label class="font-semibold">

Department Code

</label>

<input
type="text"
name="code"
value="{{ $department->code }}"
class="border rounded-lg w-full p-2 mb-4"
required>

<label class="font-semibold">

Description

</label>

<textarea
name="description"
rows="4"
class="border rounded-lg w-full p-2">{{ $department->description }}</textarea>

<button
class="bg-green-600 text-white px-6 py-2 rounded mt-5">

Update Department

</button>

</form>

</div>

</div>

</x-app-layout>