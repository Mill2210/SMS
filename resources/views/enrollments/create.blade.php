<x-app-layout>

<div class="max-w-4xl mx-auto mt-10">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-6">
            Course Registration
        </h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-5">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('enrollments.store') }}">

            @csrf

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Student
                </label>

                <select
                    name="student_id"
                    class="w-full border rounded-lg p-3"
                    required>

                    <option value="">
                        Select Student
                    </option>

                    @foreach($students as $student)

                        <option value="{{ $student->id }}">

                            {{ $student->admission_number }}
                            -
                            {{ $student->first_name }}
                            {{ $student->last_name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="grid md:grid-cols-2 gap-5">

                <div>

                    <label class="block font-semibold mb-2">
                        Academic Year
                    </label>

                    <input
                        type="text"
                        name="academic_year"
                        value="{{ date('Y') }}/{{ date('Y')+1 }}"
                        class="w-full border rounded-lg p-3"
                        required>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Semester
                    </label>

                    <select
                        name="semester"
                        class="w-full border rounded-lg p-3"
                        required>

                        <option value="Semester I">
                            Semester I
                        </option>

                        <option value="Semester II">
                            Semester II
                        </option>

                    </select>

                </div>

            </div>

            <div class="mt-6">

                <label class="block font-semibold mb-2">
                    Course
                </label>

                <select
                    name="course_id"
                    class="w-full border rounded-lg p-3"
                    required>

                    <option value="">
                        Select Course
                    </option>

                    @foreach($courses as $course)

                        <option value="{{ $course->id }}">

                            {{ $course->course_code }}
                            -
                            {{ $course->course_name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">

                    Register Course

                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>