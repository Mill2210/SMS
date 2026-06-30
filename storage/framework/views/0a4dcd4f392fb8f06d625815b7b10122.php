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

                Student Results

            </h1>

            <p class="text-gray-500 mt-1">

                Manage examination results and grades.

            </p>

        </div>

        <a href="<?php echo e(route('results.create')); ?>"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold">

            + Add Result

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
                        placeholder="Search student or course..."
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

                        <th class="p-4 text-left">Course</th>

                        <th class="p-4 text-center">CA</th>

                        <th class="p-4 text-center">Exam</th>

                        <th class="p-4 text-center">Total</th>

                        <th class="p-4 text-center">Grade</th>

                        <th class="p-4 text-center">Status</th>

                        <th class="p-4 text-center">Actions</th>

                    </tr>

                </thead>

                <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4">

                            <?php echo e($result->student->first_name); ?>

                            <?php echo e($result->student->last_name); ?>


                        </td>

                        <td class="p-4">

                            <?php echo e($result->course->course_name); ?>


                        </td>

                        <td class="text-center p-4">

                            <?php echo e($result->ca_score); ?>


                        </td>

                        <td class="text-center p-4">

                            <?php echo e($result->exam_score); ?>


                        </td>

                        <td class="text-center p-4 font-bold">

                            <?php echo e($result->total); ?>


                        </td>

                        <td class="text-center p-4">

                            <span class="font-bold">

                                <?php echo e($result->grade); ?>


                            </span>

                        </td>

                        <td class="text-center p-4">

                            <?php if($result->status=='PASS'): ?>

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                                    PASS

                                </span>

                            <?php else: ?>

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

                                    FAIL

                                </span>

                            <?php endif; ?>

                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="<?php echo e(route('results.show',$result)); ?>"
                                   class="bg-blue-500 text-white px-3 py-2 rounded">

                                    View

                                </a>

                                <a href="<?php echo e(route('results.edit',$result)); ?>"
                                   class="bg-yellow-500 text-white px-3 py-2 rounded">

                                    Edit

                                </a>

                                <form action="<?php echo e(route('results.destroy',$result)); ?>"
                                      method="POST">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button
                                        onclick="return confirm('Delete result?')"
                                        class="bg-red-600 text-white px-3 py-2 rounded">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="8"
                            class="text-center py-10 text-gray-500">

                            No results found.

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
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/results/index.blade.php ENDPATH**/ ?>