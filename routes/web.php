<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseAllocationController;
use App\Http\Controllers\ResultController;

Route::resource('results', ResultController::class);
Route::resource('course-allocations', CourseAllocationController::class);
Route::resource('lecturers', LecturerController::class);
Route::resource('programs', ProgramController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('students', StudentController::class)
    ->middleware(['auth']);
    
Route::resource('courses', CourseController::class);

Route::get(
    '/students/{student}/portal',
    [StudentController::class,'portal']
)->name('students.portal');
Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::resource('enrollments', EnrollmentController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/students/{student}/profile', 
    [StudentController::class,'profile']
)->name('students.profile')
->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
