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

<div class="max-w-4xl mx-auto mt-10">

<h2 class="text-2xl font-bold mb-5">
Register Student
</h2>


<form method="POST" 
action="<?php echo e(route('students.store')); ?>"
enctype="multipart/form-data">

<?php echo csrf_field(); ?>


<select name="program_id" class="border p-2 w-full">
<option>Select Program</option>

<?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($program->id); ?>">
<?php echo e($program->name); ?>

</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>


<input name="first_name"
placeholder="First Name"
class="border p-2 w-full mt-3">


<input name="middle_name"
placeholder="Middle Name"
class="border p-2 w-full mt-3">


<input name="last_name"
placeholder="Last Name"
class="border p-2 w-full mt-3">


<select name="gender"
class="border p-2 w-full mt-3">

<option>Male</option>
<option>Female</option>

</select>


<input type="date"
name="date_of_birth"
class="border p-2 w-full mt-3">


<input name="phone"
placeholder="Phone"
class="border p-2 w-full mt-3">


<input name="email"
placeholder="Email"
class="border p-2 w-full mt-3">


<input name="admission_year"
value="<?php echo e(date('Y')); ?>"
class="border p-2 w-full mt-3">

<label class="block mt-4 font-semibold">
    Student Photo
</label>

<input 
type="file"
name="photo"
accept="image/*"
class="border p-2 w-full mt-2">

<button class="bg-blue-600 text-white px-5 py-2 mt-5">
Save Student
</button>


</form>

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
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/students/create.blade.php ENDPATH**/ ?>