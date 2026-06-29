<header class="fixed top-0 left-64 right-0 h-16 bg-white border-b border-gray-200 shadow-sm flex items-center justify-between px-8">

    <h2 class="text-xl font-bold text-gray-800">
        University Student Management System
    </h2>

    <div class="flex items-center gap-4">

        <input
            type="text"
            placeholder="Search..."
            class="border rounded-lg px-4 py-2 w-72">

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            <div>

                <p class="font-semibold">

                    {{ Auth::user()->name }}

                </p>

                <small class="text-gray-500">

                    Administrator

                </small>

            </div>

        </div>

    </div>

</header>