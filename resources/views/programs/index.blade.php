<x-app-layout>

<div class="space-y-6">

    <div class="flex items-center justify-between">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Programs
            </h1>

            <p class="text-gray-500 mt-1">
                Manage all academic programs.
            </p>

        </div>

        <a href="{{ route('programs.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + Add Program

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
                        placeholder="Search program..."
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

                        <th class="text-left p-4">Code</th>

                        <th class="text-left p-4">Program Name</th>

                        <th class="text-left p-4">Department</th>

                        <th class="text-left p-4">Duration</th>

                        <th class="text-left p-4">Status</th>

                        <th class="text-center p-4">Actions</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($programs as $program)

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4 font-semibold">

                            {{ $program->code }}

                        </td>

                        <td class="p-4">

                            {{ $program->name }}

                        </td>

                        <td class="p-4">

                            {{ $program->department->name ?? '-' }}

                        </td>

                        <td class="p-4">

                            {{ $program->duration_years }} Years

                        </td>

                        <td class="p-4">

                            @if($program->status=='Active')

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

                                <a href="{{ route('programs.show',$program) }}"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="{{ route('programs.edit',$program) }}"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form action="{{ route('programs.destroy',$program) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete Program?')"
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

                            No programs found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>