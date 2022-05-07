<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CourseModulesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('courses', [CoursesController::class]);

// Route::get('/courses', [CoursesController::class, 'index']);
// Route::post('/courses/store', [CoursesController::class, 'store']);
// Route::get('/courses/{course}', [CoursesController::class, 'show']);
// Route::patch('/courses/{course}/update', [CoursesController::class, 'update']);
// Route::delete('/courses/{course}/delete', [CoursesController::class, 'destroy']);

// Route::get('/modules', [CoursesModulesController::class, 'index']);
// Route::post('/modules/store', [CoursesModulesController::class, 'store']);
// Route::get('/modules/{course}', [CoursesModulesController::class, 'show']);
// Route::patch('/modules/{course}/update', [CoursesModulesController::class, 'update']);
// Route::delete('/modules/{course}/delete', [CoursesModulesController::class, 'destroy']);


//Route::apiResource('courses', [CoursesController::class])->only(['index', 'show']);
