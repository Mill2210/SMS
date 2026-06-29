<x-app-layout>

<div class="max-w-5xl mx-auto">

    <div class="bg-white rounded-xl shadow">

        <div class="flex justify-between items-center border-b px-6 py-4">

            <h1 class="text-2xl font-bold">
                Student Details
            </h1>

            <a href="{{ route('students.index') }}"
               class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">

                ← Back

            </a>

        </div>

        <div class="grid md:grid-cols-2 gap-6 p-6">

            <div>
                <label class="text-sm font-semibold text-gray-500">Admission Number</label>
                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $student->admission_number }}
                </div>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-500">Full Name</label>
                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $student->first_name }}
                    {{ $student->middle_name }}
                    {{ $student->last_name }}
                </div>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-500">Program</label>
                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $student->program->name ?? 'N/A' }}
                </div>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-500">Gender</label>
                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $student->gender }}
                </div>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-500">Email</label>
                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $student->email }}
                </div>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-500">Phone</label>
                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $student->phone }}
                </div>
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-500">Status</label>
                <div class="border rounded-lg p-3 bg-gray-50">

                    @if($student->status == 'Active')
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                            Active
                        </span>
                    @else
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                            Inactive
                        </span>
                    @endif

                </div>
            </div>

        </div>

        <div class="border-t px-6 py-4 flex gap-3">

            <a href="{{ route('students.edit', $student) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">

                Edit

            </a>

            <form action="{{ route('students.destroy', $student) }}"
                  method="POST"
                  onsubmit="return confirm('Delete this student?')">

                @csrf
                @method('DELETE')

                <button class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">

                    Delete

                </button>

            </form>

        </div>

    </div>

</div>

</x-app-layout>