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

<div class="bg-white shadow rounded-lg p-6">

<h2 class="text-2xl font-bold mb-6">

Enter Student Results

</h2>

<?php if($errors->any()): ?>

<div class="bg-red-100 text-red-700 p-4 rounded mb-5">

<ul>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li><?php echo e($error); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>

</div>

<?php endif; ?>


<form method="POST"
action="<?php echo e(route('results.store')); ?>">

<?php echo csrf_field(); ?>


<label class="font-semibold">

Student

</label>

<select
id="student"
name="student_id"
class="border rounded-lg w-full p-2 mb-5">

<option value="">

Select Student

</option>

<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option
value="<?php echo e($student->id); ?>">

<?php echo e($student->admission_number); ?>

-
<?php echo e($student->first_name); ?>

<?php echo e($student->last_name); ?>


</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>



<label class="font-semibold">

Course

</label>

<select
id="course"
name="course_id"
class="border rounded-lg w-full p-2 mb-5">

<option>

Select Course

</option>

</select>



<label>

Coursework (40)

</label>

<input
type="number"
step="0.01"
max="40"
name="coursework"
class="border rounded-lg w-full p-2 mb-4">


<label>

Exam (60)

</label>

<input
type="number"
step="0.01"
max="60"
name="exam"
class="border rounded-lg w-full p-2 mb-4">


<label>

Academic Year

</label>

<input
type="text"
name="academic_year"
value="<?php echo e(date('Y')); ?>/<?php echo e(date('Y')+1); ?>"
class="border rounded-lg w-full p-2 mb-4">


<label>

Semester

</label>

<select
name="semester"
class="border rounded-lg w-full p-2 mb-5">

<option>

Semester I

</option>

<option>

Semester II

</option>

</select>


<button
class="bg-blue-600 text-white px-6 py-2 rounded">

Save Result

</button>

</form>

</div>

</div>


<script>

const students = <?php echo json_encode($students, 15, 512) ?>;

document
.getElementById('student')
.addEventListener('change', function(){

let student = students.find(
s => s.id == this.value
);

let course = document.getElementById('course');

course.innerHTML = '';

if(student){

student.courses.forEach(function(c){

course.innerHTML += `
<option value="${c.id}">
${c.course_code} - ${c.course_name}
</option>
`;

});

}

});

</script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\Lenovo\Desktop\SMS\Backend\resources\views/results/create.blade.php ENDPATH**/ ?>