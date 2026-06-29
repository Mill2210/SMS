<aside class="fixed top-0 left-0 w-64 h-screen bg-slate-900 text-white shadow-xl overflow-y-auto z-50">

    <div class="h-16 flex items-center justify-center border-b border-slate-700">

        <h1 class="text-2xl font-bold tracking-wide">
            UniSMS
        </h1>

    </div>

    <nav class="py-5">

        <a href="<?php echo e(route('dashboard')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('dashboard') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            🏠
            <span class="ml-3">Dashboard</span>

        </a>

        <p class="px-6 mt-6 mb-2 text-xs uppercase text-slate-400">
            Academic
        </p>

        <a href="<?php echo e(route('departments.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('departments.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            🏢
            <span class="ml-3">Departments</span>

        </a>

        <a href="<?php echo e(route('programs.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('programs.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            🎓
            <span class="ml-3">Programs</span>

        </a>

        <a href="<?php echo e(route('courses.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('courses.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            📚
            <span class="ml-3">Courses</span>

        </a>

        <a href="<?php echo e(route('enrollments.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('enrollments.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            📝
            <span class="ml-3">Enrollments</span>

        </a>

        <a href="<?php echo e(route('results.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('results.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            📊
            <span class="ml-3">Results</span>

        </a>

        <p class="px-6 mt-6 mb-2 text-xs uppercase text-slate-400">
            Students
        </p>

        <a href="<?php echo e(route('students.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('students.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            👨‍🎓
            <span class="ml-3">Students</span>

        </a>

        <p class="px-6 mt-6 mb-2 text-xs uppercase text-slate-400">
            Staff
        </p>

        <a href="<?php echo e(route('lecturers.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('lecturers.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            👨‍🏫
            <span class="ml-3">Lecturers</span>

        </a>

        <a href="<?php echo e(route('course-allocations.index')); ?>"
           class="flex items-center px-6 py-3 transition hover:bg-slate-800
           <?php echo e(request()->routeIs('course-allocations.*') ? 'bg-slate-800 border-l-4 border-blue-500' : ''); ?>">

            📋
            <span class="ml-3">Course Allocation</span>

        </a>

    </nav>

</aside><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>