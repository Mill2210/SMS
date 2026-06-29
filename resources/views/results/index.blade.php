<x-app-layout>

<div class="space-y-6">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">

                Student Results

            </h1>

            <p class="text-gray-500 mt-1">

                Manage examination results and grades.

            </p>

        </div>

        <a href="{{ route('results.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + Add Result

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
                        placeholder="Search student or course..."
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

                        <th class="p-4 text-left">Student</th>

                        <th class="p-4 text-left">Course</th>

                        <th class="p-4 text-center">CA</th>

                        <th class="p-4 text-center">Exam</th>

                        <th class="p-4 text-center">Total</th>

                        <th class="p-4 text-center">Grade</th>

                        <th class="p-4 text-center">Status</th>

                        <th class="p-4 text-center">Actions</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($results as $result)

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4">

                            {{ $result->student->first_name }}
                            {{ $result->student->last_name }}

                        </td>

                        <td class="p-4">

                            {{ $result->course->course_name }}

                        </td>

                        <td class="text-center p-4">

                            {{ $result->ca_score }}

                        </td>

                        <td class="text-center p-4">

                            {{ $result->exam_score }}

                        </td>

                        <td class="text-center p-4 font-bold">

                            {{ $result->total }}

                        </td>

                        <td class="text-center p-4">

                            <span class="font-bold">

                                {{ $result->grade }}

                            </span>

                        </td>

                        <td class="text-center p-4">

                            @if($result->status=='PASS')

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                                    PASS

                                </span>

                            @else

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

                                    FAIL

                                </span>

                            @endif

                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('results.show',$result) }}"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="{{ route('results.edit',$result) }}"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form action="{{ route('results.destroy',$result) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete result?')"
                                        class="bg-red-600 text-white px-3 py-2 rounded">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="8"
                            class="text-center py-10 text-gray-500">

                            No results found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>