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

<div class="space-y-6">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">

                Student Enrollments

            </h1>

            <p class="text-gray-500 mt-1">

                Register students into courses.

            </p>

        </div>

        <a href="<?php echo e(route('enrollments.create')); ?>"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + New Enrollment

        </a>

    </div>

    <div class="bg-white rounded-xl shadow">

        <div class="p-6 border-b">

            <form method="GET">

                <div class="flex gap-4">

                    <input
                        type="text"
                        name="search"
                        value="<?php echo e(request('search')); ?>"
                        placeholder="Search student..."
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

                        <th class="p-4 text-left">Student</th>

                        <th class="p-4 text-left">Admission No.</th>

                        <th class="p-4 text-left">Course</th>

                        <th class="p-4 text-left">Academic Year</th>

                        <th class="p-4 text-left">Semester</th>

                        <th class="p-4 text-center">Actions</th>

                    </tr>

                </thead>

                <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4">

                            <?php echo e($enrollment->student->first_name); ?>

                            <?php echo e($enrollment->student->last_name); ?>


                        </td>

                        <td class="p-4 font-semibold">

                            <?php echo e($enrollment->student->admission_number); ?>


                        </td>

                        <td class="p-4">

                            <?php echo e($enrollment->course->course_name); ?>


                        </td>

                        <td class="p-4">

                            <?php echo e($enrollment->academic_year); ?>


                        </td>

                        <td class="p-4">

                            <?php echo e($enrollment->semester); ?>


                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="<?php echo e(route('enrollments.show',$enrollment)); ?>"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="<?php echo e(route('enrollments.edit',$enrollment)); ?>"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form action="<?php echo e(route('enrollments.destroy',$enrollment)); ?>"
                                      method="POST">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button
                                        onclick="return confirm('Delete enrollment?')"
                                        class="bg-red-600 text-white px-3 py-2 rounded">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="6"
                            class="text-center py-10 text-gray-500">

                            No enrollments found.

                        </td>

                    </tr>

                <?php endif; ?>

                </tbody>

            </table>

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
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/enrollments/index.blade.php ENDPATH**/ ?>