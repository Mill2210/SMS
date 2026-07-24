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

<div class="max-w-3xl mx-auto mt-10">

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Add Department

</h2>

<form method="POST"
      action="<?php echo e(route('departments.store')); ?>">

<?php echo csrf_field(); ?>

<label class="font-semibold">

Department Name

</label>

<input
type="text"
name="name"
class="border rounded-lg w-full p-2 mb-4"
required>

<label class="font-semibold">

Department Code

</label>

<input
type="text"
name="code"
class="border rounded-lg w-full p-2 mb-4"
required>

<label class="font-semibold">

Description

</label>

<textarea
name="description"
rows="4"
class="border rounded-lg w-full p-2"></textarea>

<button
class="bg-blue-600 text-white px-6 py-2 rounded mt-5">

Save Department

</button>

</form>

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
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/departments/create.blade.php ENDPATH**/ ?>