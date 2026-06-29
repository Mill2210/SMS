<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Add Department

</h2>

<form method="POST"
      action="{{ route('departments.store') }}">

@csrf

<label class="font-semibold">

Department Name

</label>

<input
type="text"
name="name"
class="border rounded-lg w-full p-2 mb-4"
required>

<label class="font-semibold">

Department Code

</label>

<input
type="text"
name="code"
class="border rounded-lg w-full p-2 mb-4"
required>

<label class="font-semibold">

Description

</label>

<textarea
name="description"
rows="4"
class="border rounded-lg w-full p-2"></textarea>

<button
class="bg-blue-600 text-white px-6 py-2 rounded mt-5">

Save Department

</button>

</form>

</div>

</div>

</x-app-layout>