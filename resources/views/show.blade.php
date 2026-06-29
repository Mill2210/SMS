<x-app-layout>

<div class="max-w-4xl mx-auto">

    <div class="bg-white rounded-xl shadow">

        <div class="border-b px-6 py-4">
            <h1 class="text-2xl font-bold">Course Details</h1>
        </div>

        <div class="p-6 grid grid-cols-2 gap-6">

            <div>
                <label class="font-semibold text-gray-600">Course Code</label>
                <p>{{ $course->course_code }}</p>
            </div>

            <div>
                <label class="font-semibold text-gray-600">Course Name</label>
                <p>{{ $course->course_name }}</p>
            </div>

            <div>
                <label class="font-semibold text-gray-600">Program</label>
                <p>{{ $course->program->name ?? '-' }}</p>
            </div>

            <div>
                <label class="font-semibold text-gray-600">Year</label>
                <p>{{ $course->year_of_study }}</p>
            </div>

            <div>
                <label class="font-semibold text-gray-600">Semester</label>
                <p>{{ $course->semester }}</p>
            </div>

            <div>
                <label class="font-semibold text-gray-600">Credit Hours</label>
                <p>{{ $course->credit_hours }}</p>
            </div>

        </div>

        <div class="border-t px-6 py-4">

            <a href="{{ route('courses.index') }}"
               class="bg-gray-600 text-white px-5 py-2 rounded-lg">

                Back

            </a>

        </div>

    </div>

</div>

</x-app-layout>