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
Add Lecturer
</h2>

<?php if($errors->any()): ?>

<div class="bg-red-100 text-red-700 p-4 rounded mb-5">

<ul class="list-disc ml-5">

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li><?php echo e($error); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

</div>

<?php endif; ?>

<form method="POST"
action="<?php echo e(route('lecturers.store')); ?>"
enctype="multipart/form-data">

<?php echo csrf_field(); ?>

<label>Department</label>

<select
name="department_id"
class="border rounded-lg w-full p-2 mb-4">

<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($department->id); ?>">

<?php echo e($department->name); ?>


</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

<input
type="text"
name="staff_number"
placeholder="Staff Number"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="first_name"
placeholder="First Name"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="last_name"
placeholder="Last Name"
class="border rounded-lg w-full p-2 mb-4">

<input
type="email"
name="email"
placeholder="Email"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="phone"
placeholder="Phone"
class="border rounded-lg w-full p-2 mb-4">

<input
type="text"
name="qualification"
placeholder="Qualification"
class="border rounded-lg w-full p-2 mb-4">

<label>Photo</label>

<input
type="file"
name="photo"
class="border rounded-lg w-full p-2 mb-4">

<button
class="bg-blue-600 text-white px-6 py-2 rounded">

Save Lecturer

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
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/lecturers/create.blade.php ENDPATH**/ ?>