<x-app-layout>

<div class="space-y-6">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Lecturers
            </h1>

            <p class="text-gray-500 mt-1">
                Manage all university lecturers.
            </p>

        </div>

        <a href="{{ route('lecturers.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + Add Lecturer

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
                        placeholder="Search lecturer..."
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

                        <th class="p-4 text-left">Staff No.</th>
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Department</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-left">Phone</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-center">Actions</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($lecturers as $lecturer)

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4 font-semibold">

                            {{ $lecturer->staff_number }}

                        </td>

                        <td class="p-4">

                            {{ $lecturer->first_name }}
                            {{ $lecturer->last_name }}

                        </td>

                        <td class="p-4">

                            {{ $lecturer->department->name ?? '-' }}

                        </td>

                        <td class="p-4">

                            {{ $lecturer->email }}

                        </td>

                        <td class="p-4">

                            {{ $lecturer->phone }}

                        </td>

                        <td class="p-4">

                            @if($lecturer->status=='Active')

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

                                <a href="{{ route('lecturers.show',$lecturer) }}"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="{{ route('lecturers.edit',$lecturer) }}"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form method="POST"
                                      action="{{ route('lecturers.destroy',$lecturer) }}">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete lecturer?')"
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

                            No lecturers found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>