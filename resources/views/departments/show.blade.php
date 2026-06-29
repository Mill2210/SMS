<x-app-layout>

<div class="max-w-5xl mx-auto">

    <div class="bg-white rounded-xl shadow">

        <div class="flex items-center justify-between border-b px-6 py-4">

            <h1 class="text-2xl font-bold text-gray-800">
                Department Details
            </h1>

            <a href="{{ route('departments.index') }}"
               class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">

                ← Back

            </a>

        </div>

        <div class="p-6 space-y-6">

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-2">
                    Department Name
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $department->name }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-2">
                    Department Code
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $department->code }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-2">
                    Description
                </label>

                <div class="border rounded-lg p-3 bg-gray-50 min-h-[100px]">
                    {{ $department->description ?? 'No description available.' }}
                </div>

            </div>

            <div>

                <label class="block text-sm font-semibold text-gray-500 mb-2">
                    Created At
                </label>

                <div class="border rounded-lg p-3 bg-gray-50">
                    {{ $department->created_at?->format('d M Y H:i') }}
                </div>

            </div>

        </div>

        <div class="border-t px-6 py-4 flex gap-3">

            <a href="{{ route('departments.edit', $department) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">

                Edit

            </a>

            <form method="POST"
                  action="{{ route('departments.destroy', $department) }}"
                  onsubmit="return confirm('Are you sure you want to delete this department?')">

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">

                    Delete

                </button>

            </form>

        </div>

    </div>

</div>

</x-app-layout>