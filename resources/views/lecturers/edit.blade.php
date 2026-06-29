<x-app-layout>

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-6">
            Edit Lecturer
        </h2>

        @if($errors->any())

            <div class="bg-red-100 text-red-700 border border-red-300 rounded p-4 mb-5">

                <ul class="list-disc ml-5">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form method="POST"
              action="{{ route('lecturers.update',$lecturer) }}"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <label class="font-semibold">
                Department
            </label>

            <select
                name="department_id"
                class="border rounded-lg w-full p-2 mb-4">

                @foreach($departments as $department)

                    <option
                        value="{{ $department->id }}"
                        {{ $department->id == $lecturer->department_id ? 'selected' : '' }}>

                        {{ $department->name }}

                    </option>

                @endforeach

            </select>


            <label class="font-semibold">
                Staff Number
            </label>

            <input
                type="text"
                name="staff_number"
                value="{{ old('staff_number',$lecturer->staff_number) }}"
                class="border rounded-lg w-full p-2 mb-4">


            <label class="font-semibold">
                First Name
            </label>

            <input
                type="text"
                name="first_name"
                value="{{ old('first_name',$lecturer->first_name) }}"
                class="border rounded-lg w-full p-2 mb-4">


            <label class="font-semibold">
                Last Name
            </label>

            <input
                type="text"
                name="last_name"
                value="{{ old('last_name',$lecturer->last_name) }}"
                class="border rounded-lg w-full p-2 mb-4">


            <label class="font-semibold">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email',$lecturer->email) }}"
                class="border rounded-lg w-full p-2 mb-4">


            <label class="font-semibold">
                Phone
            </label>

            <input
                type="text"
                name="phone"
                value="{{ old('phone',$lecturer->phone) }}"
                class="border rounded-lg w-full p-2 mb-4">


            <label class="font-semibold">
                Qualification
            </label>

            <input
                type="text"
                name="qualification"
                value="{{ old('qualification',$lecturer->qualification) }}"
                class="border rounded-lg w-full p-2 mb-4">


            @if($lecturer->photo)

                <div class="mb-4">

                    <img
                        src="{{ asset('storage/'.$lecturer->photo) }}"
                        class="w-24 h-24 rounded-full object-cover border">

                </div>

            @endif


            <label class="font-semibold">
                Change Photo
            </label>

            <input
                type="file"
                name="photo"
                class="border rounded-lg w-full p-2 mb-5">


            <button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">

                Update Lecturer

            </button>

            <a href="{{ route('lecturers.index') }}"
               class="ml-3 bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded">

                Cancel

            </a>

        </form>

    </div>

</div>

</x-app-layout>