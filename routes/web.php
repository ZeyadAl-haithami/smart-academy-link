<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

//* routing for admin
Route::get('/admin',[adminController::class,'getDashboard'])->name('adminDashboard');
Route::get('/admin/class-list',[adminController::class,'getClassList'])->name('classList');
Route::get('/admin/class-selector',[adminController::class,'getClassInfo'])->name('classSelector');
Route::get('/admin/student-list',[adminController::class,'showStudentList'])->name('studentList');
Route::get('/admin/teacher-list',[adminController::class,'showTeacherList'])->name('teacherList');





//* routing for teacher



//* routing for parent



//* routing for tilawah



//* routing for access

