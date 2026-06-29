<x-app-layout>

<div class="max-w-5xl mx-auto">

    <div class="bg-white rounded-xl shadow">

        <div class="flex justify-between items-center border-b px-6 py-4">

            <h1 class="text-2xl font-bold text-gray-800">
                Course Details
            </h1>

            <a href="{{ route('courses.index') }}"
               class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">

                ← Back

            </a>

        </div>

        <div class="grid md:grid-cols-2 gap-6 p-6">

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Course Code
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $course->course_code }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Course Name
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $course->course_name }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Program
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $course->program->name ?? 'N/A' }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Year of Study
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $course->year_of_study }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Semester
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $course->semester }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Credit Hours
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $course->credit_hours }}
                </div>

            </div>

            <div class="md:col-span-2">

                <label class="block text-sm font-semibold text-gray-500 mb-1">
                    Status
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">

                    @if($course->status == 'Active')

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                            Active

                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

                            Inactive

                        </span>

                    @endif

                </div>

            </div>

        </div>

        <div class="border-t px-6 py-4 flex gap-3">

            <a href="{{ route('courses.edit', $course) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">

                Edit Course

            </a>

            <form action="{{ route('courses.destroy', $course) }}"
                  method="POST"
                  onsubmit="return confirm('Delete this course?')">

                @csrf
                @method('DELETE')

                <button
                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">

                    Delete

                </button>

            </form>

        </div>

    </div>

</div>

</x-app-layout>