<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeworkController;

//* routing for admin
Route::get('/admin',[adminController::class,'getDashboard'])->name('adminDashboard');
Route::get('/admin/class-list',[adminController::class,'getClassList'])->name('classList');
Route::get('/admin/class-selector',[adminController::class,'getClassInfo'])->name('classSelector');
Route::get('/admin/student-list',[adminController::class,'showStudentList'])->name('studentList');
Route::get('/admin/teacher-list',[adminController::class,'showTeacherList'])->name('teacherList');





//* routing for teacher

// Route for teacher dashboard
Route::get('/teacher-dashboard', function () {
    return view('dashboard');  // Loads the resources/views/dashboard.blade.php
});

// Route for student list
Route::get('/students', [StudentController::class, 'index']);

Route::get('/homework/create', [HomeworkController::class, 'create'])->name('homework.create');
Route::get('/homework', [HomeworkController::class, 'store']);

//* routing for parent



//* routing for tilawah



//* routing for access

