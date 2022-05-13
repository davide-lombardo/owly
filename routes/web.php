<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CourseModulesController;
use App\Http\Controllers\UserController;


Route::get('/', [CoursesController::class, 'index'])->name('home');
Route::get('/courses/create', [CoursesController::class, 'create'])->middleware('auth');
Route::post('/courses', [CoursesController::class, 'store'])->middleware('auth');
Route::get('/courses/{course-id}/edit', [CoursesController::class, 'edit'])->middleware('auth');
Route::put('/courses/{course-id}', [CoursesController::class, 'update'])->middleware('auth');
Route::delete('/courses/{course-id}', [CoursesController::class, 'destroy'])->middleware('auth');
Route::get('/courses/manage', [CoursesController::class, 'manage'])->middleware('auth');

Route::get('/modules/create', [CourseModulesController::class, 'create'])->middleware('auth');
Route::post('/modules', [CourseModulesController::class, 'store'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);












