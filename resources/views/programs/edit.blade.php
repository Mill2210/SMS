<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-6">
            Edit Program
        </h2>

        @if ($errors->any())

            <div class="bg-red-100 text-red-700 border border-red-300 rounded p-4 mb-5">

                <ul class="list-disc ml-5">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form method="POST" action="{{ route('programs.update', $program) }}">

            @csrf
            @method('PUT')

            <label class="font-semibold">
                Department
            </label>

            <select
                name="department_id"
                class="border rounded-lg w-full p-2 mb-4"
                required>

                @foreach($departments as $department)

                    <option
                        value="{{ $department->id }}"
                        {{ $department->id == $program->department_id ? 'selected' : '' }}>

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
                value="{{ old('name', $program->name) }}"
                class="border rounded-lg w-full p-2 mb-4"
                required>

            <label class="font-semibold">
                Program Code
            </label>

            <input
                type="text"
                name="code"
                value="{{ old('code', $program->code) }}"
                class="border rounded-lg w-full p-2 mb-4"
                required>

            <label class="font-semibold">
                Duration (Years)
            </label>

            <input
                type="number"
                name="duration_years"
                value="{{ old('duration_years', $program->duration_years) }}"
                class="border rounded-lg w-full p-2 mb-4"
                required>

            <label class="font-semibold">
                Description
            </label>

            <textarea
                name="description"
                rows="4"
                class="border rounded-lg w-full p-2">{{ old('description', $program->description) }}</textarea>

            <button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded mt-5">

                Update Program

            </button>

        </form>

    </div>

</div>

</x-app-layout>