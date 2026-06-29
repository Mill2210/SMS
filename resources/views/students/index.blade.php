<x-app-layout>

<div class="space-y-6">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">

                Students

            </h1>

            <p class="text-gray-500 mt-1">

                Manage all registered students.

            </p>

        </div>

        <a href="{{ route('students.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + Register Student

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
                        placeholder="Search student..."
                        class="flex-1 border rounded-lg px-4 py-3">

                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 rounded-lg">

                        Search

                    </button>

                </div>

            </form>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-slate-100">

                <tr>

                    <th class="p-4 text-left">Photo</th>

                    <th class="p-4 text-left">Admission No.</th>

                    <th class="p-4 text-left">Student</th>

                    <th class="p-4 text-left">Program</th>

                    <th class="p-4 text-left">Phone</th>

                    <th class="p-4 text-left">Status</th>

                    <th class="p-4 text-center">Actions</th>

                </tr>

                </thead>

                <tbody>

                @forelse($students as $student)

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4">

                            @if($student->photo)

                                <img src="{{ asset('storage/'.$student->photo) }}"
                                     class="w-12 h-12 rounded-full object-cover">

                            @else

                                <div class="w-12 h-12 rounded-full bg-gray-300"></div>

                            @endif

                        </td>

                        <td class="p-4 font-semibold">

                            {{ $student->admission_number }}

                        </td>

                        <td class="p-4">

                            <div class="font-semibold">

                                {{ $student->first_name }}
                                {{ $student->middle_name }}
                                {{ $student->last_name }}

                            </div>

                            <small class="text-gray-500">

                                {{ $student->email }}

                            </small>

                        </td>

                        <td class="p-4">

                            {{ $student->program->name ?? '-' }}

                        </td>

                        <td class="p-4">

                            {{ $student->phone }}

                        </td>

                        <td class="p-4">

                            @if($student->status=='Active')

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                                    Active

                                </span>

                            @else

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

                                    Inactive

                                </span>

                            @endif

                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('students.show',$student) }}"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="{{ route('students.edit',$student) }}"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form action="{{ route('students.destroy',$student) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete student?')"
                                        class="bg-red-600 text-white px-3 py-2 rounded">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            class="text-center py-10 text-gray-500">

                            No students found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>