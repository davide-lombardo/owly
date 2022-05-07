<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CourseModulesController;
use App\Http\Controllers\UserController;


//ALL COURSES
Route::get('/', [CoursesController::class, 'index']);

//SHOW COURSES/CREATE FORM
Route::get('/courses/create', [CoursesController::class, 'create'])->middleware('auth');

//STORE COURSES DATA
Route::post('/courses', [CoursesController::class, 'store'])->middleware('auth');

//SHOW COURSES EDIT FORM
Route::get('/courses/{course}/edit', [CoursesController::class, 'edit'])->middleware('auth');

//UPDATE COURSE
Route::patch('/courses/{course}', [CoursesController::class, 'update'])->middleware('auth');

//DELETE COURSE
Route::delete('/courses/{course}', [CoursesController::class, 'destroy'])->middleware('auth');

//MANAGE COURSES
Route::get('/courses/manage', [CoursesController::class, 'manage'])->middleware('auth');

//SHOW MODULES/CREATE FORM
Route::get('/modules/create', [CourseModulesController::class, 'create'])->middleware('auth');

//STORE MODULES DATA
Route::post('/modules', [CourseModulesController::class, 'store'])->middleware('auth');

//SHOW REGISTER FORM
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//CREATE NEW USER
Route::post('/users', [UserController::class, 'store']);

//LOGOUT 
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// SHOW LOGIN FORM
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//LOGIN USER
Route::post('/users/authenticate', [UserController::class, 'authenticate']);












