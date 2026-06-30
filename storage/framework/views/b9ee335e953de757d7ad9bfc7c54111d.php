<header class="fixed top-0 left-64 right-0 h-16 bg-white border-b border-gray-200 shadow-sm flex items-center justify-between px-8">

    <h2 class="text-xl font-bold text-gray-800">
        University Student Management System
    </h2>

    <div class="flex items-center gap-4">

        <input
            type="text"
            placeholder="Search..."
            class="border rounded-lg px-4 py-2 w-72">

        <div class="relative" x-data="{ open: false }">

            <button
                @click="open = !open"
                class="flex items-center gap-3 focus:outline-none">

                <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center">

                    <?php echo e(strtoupper(substr(Auth::user()->name,0,1))); ?>


                </div>

                <div class="text-left">

                    <p class="font-semibold">
                        <?php echo e(Auth::user()->name); ?>

                    </p>

                    <small class="text-gray-500">
                        Administrator
                    </small>

                </div>

                <svg
                    class="w-4 h-4 text-gray-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"/>

                </svg>

            </button>

            <div
                x-show="open"
                @click.outside="open = false"
                x-transition
                class="absolute right-0 mt-2 w-44 bg-white border rounded-lg shadow-lg overflow-hidden z-50">

                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <button
                        type="submit"
                        class="w-full text-left px-4 py-3 hover:bg-red-50 text-red-600 font-medium">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>

</header><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>