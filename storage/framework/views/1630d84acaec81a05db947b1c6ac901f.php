<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="space-y-8">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Dashboard
            </h1>

            <p class="text-gray-500 mt-1">
                Welcome back, <strong><?php echo e(Auth::user()->name); ?></strong>
            </p>

        </div>

        <div>

            <a href="<?php echo e(route('students.create')); ?>"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

                + New Student

            </a>

        </div>

    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-600">

            <p class="text-gray-500 text-sm">
                Students
            </p>

            <h2 class="text-4xl font-bold mt-3 text-blue-700">
                <?php echo e($students); ?>

            </h2>

        </div>

        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-green-600">

            <p class="text-gray-500 text-sm">
                Courses
            </p>

            <h2 class="text-4xl font-bold mt-3 text-green-700">
                <?php echo e($courses); ?>

            </h2>

        </div>

        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-yellow-500">

            <p class="text-gray-500 text-sm">
                Programs
            </p>

            <h2 class="text-4xl font-bold mt-3 text-yellow-600">
                <?php echo e($programs); ?>

            </h2>

        </div>

        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-red-600">

            <p class="text-gray-500 text-sm">
                Departments
            </p>

            <h2 class="text-4xl font-bold mt-3 text-red-600">
                <?php echo e($departments); ?>

            </h2>

        </div>

    </div>

    <div class="grid lg:grid-cols-3 gap-6">

        
        <div class="lg:col-span-2 bg-white rounded-xl shadow">

            <div class="border-b px-6 py-4">

                <h2 class="text-lg font-bold">

                    Recently Registered Students

                </h2>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-gray-100">

                    <tr>

                        <th class="text-left p-4">Admission No</th>
                        <th class="text-left p-4">Student</th>
                        <th class="text-left p-4">Program</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $recentStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr class="border-b hover:bg-gray-50">

                            <td class="p-4">

                                <?php echo e($student->admission_number); ?>


                            </td>

                            <td class="p-4">

                                <?php echo e($student->first_name); ?>

                                <?php echo e($student->last_name); ?>


                            </td>

                            <td class="p-4">

                                <?php echo e($student->program->name); ?>


                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>

                            <td colspan="3" class="text-center py-10 text-gray-500">

                                No students available.

                            </td>

                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

        
        <div class="bg-white rounded-xl shadow p-6">

            <h2 class="text-lg font-bold mb-5">

                Quick Actions

            </h2>

            <div class="grid gap-3">

                <a href="<?php echo e(route('students.create')); ?>"
                   class="bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg text-center">

                    Register Student

                </a>

                <a href="<?php echo e(route('courses.create')); ?>"
                   class="bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg text-center">

                    Add Course

                </a>

                <a href="<?php echo e(route('programs.create')); ?>"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white py-3 rounded-lg text-center">

                    Add Program

                </a>

                <a href="<?php echo e(route('departments.create')); ?>"
                   class="bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg text-center">

                    Add Department

                </a>

            </div>

        </div>

    </div>

</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/dashboard.blade.php ENDPATH**/ ?>