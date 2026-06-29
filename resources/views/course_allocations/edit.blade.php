<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-6">
            Edit Course Allocation
        </h2>

        @if($errors->any())

            <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded mb-5">

                <ul class="list-disc ml-5">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form method="POST"
              action="{{ route('course-allocations.update', $courseAllocation) }}">

            @csrf
            @method('PUT')

            <label class="font-semibold">
                Lecturer
            </label>

            <select
                name="lecturer_id"
                class="border rounded-lg w-full p-2 mb-4"
                required>

                @foreach($lecturers as $lecturer)

                    <option
                        value="{{ $lecturer->id }}"
                        {{ $lecturer->id == $courseAllocation->lecturer_id ? 'selected' : '' }}>

                        {{ $lecturer->staff_number }}
                        -
                        {{ $lecturer->first_name }}
                        {{ $lecturer->last_name }}

                    </option>

                @endforeach

            </select>


            <label class="font-semibold">
                Course
            </label>

            <select
                name="course_id"
                class="border rounded-lg w-full p-2 mb-4"
                required>

                @foreach($courses as $course)

                    <option
                        value="{{ $course->id }}"
                        {{ $course->id == $courseAllocation->course_id ? 'selected' : '' }}>

                        {{ $course->course_code }}
                        -
                        {{ $course->course_name }}

                    </option>

                @endforeach

            </select>


            <label class="font-semibold">
                Academic Year
            </label>

            <input
                type="text"
                name="academic_year"
                value="{{ old('academic_year', $courseAllocation->academic_year) }}"
                class="border rounded-lg w-full p-2 mb-4"
                required>


            <label class="font-semibold">
                Semester
            </label>

            <select
                name="semester"
                class="border rounded-lg w-full p-2 mb-5"
                required>

                <option value="Semester I"
                    {{ $courseAllocation->semester == 'Semester I' ? 'selected' : '' }}>

                    Semester I

                </option>

                <option value="Semester II"
                    {{ $courseAllocation->semester == 'Semester II' ? 'selected' : '' }}>

                    Semester II

                </option>

            </select>


            <button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">

                Update Allocation

            </button>

            <a href="{{ route('course-allocations.index') }}"
               class="ml-3 bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded">

                Cancel

            </a>

        </form>

    </div>

</div>

</x-app-layout>