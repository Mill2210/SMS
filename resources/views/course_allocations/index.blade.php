<x-app-layout>

<div class="space-y-6">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Course Allocation
            </h1>

            <p class="text-gray-500 mt-1">
                Allocate lecturers to courses.
            </p>

        </div>

        <a href="{{ route('course-allocations.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + Allocate Course

        </a>

    </div>

    <div class="bg-white rounded-xl shadow">

        <div class="p-6 border-b">

            <form method="GET">

                <div class="flex gap-4">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search allocation..."
                        class="flex-1 border rounded-lg px-4 py-3">

                    <button
                        class="bg-blue-600 text-white px-6 rounded-lg">

                        Search

                    </button>

                </div>

            </form>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-slate-100">

                    <tr>

                        <th class="p-4 text-left">Course</th>

                        <th class="p-4 text-left">Course Code</th>

                        <th class="p-4 text-left">Lecturer</th>

                        <th class="p-4 text-left">Academic Year</th>

                        <th class="p-4 text-left">Semester</th>

                        <th class="p-4 text-center">Actions</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($courseAllocations as $allocation)

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4">

                            {{ $allocation->course->course_name ?? '-' }}

                        </td>

                        <td class="p-4 font-semibold">

                            {{ $allocation->course->course_code ?? '-' }}

                        </td>

                        <td class="p-4">

                            {{ $allocation->lecturer->first_name ?? '' }}
                            {{ $allocation->lecturer->last_name ?? '' }}

                        </td>

                        <td class="p-4">

                            {{ $allocation->academic_year }}

                        </td>

                        <td class="p-4">

                            {{ $allocation->semester }}

                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('course-allocations.show',$allocation) }}"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="{{ route('course-allocations.edit',$allocation) }}"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form method="POST"
                                      action="{{ route('course-allocations.destroy',$allocation) }}">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete allocation?')"
                                        class="bg-red-600 text-white px-3 py-2 rounded">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6"
                            class="text-center py-10 text-gray-500">

                            No allocations found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>