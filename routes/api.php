<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CoursesController;
use App\Http\Controllers\API\CoursesModulesController;

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

// Route::resource('courses', [CoursesController::class]);

Route::get('/courses', [CoursesController::class, 'index']);
Route::post('/courses/store', [CoursesController::class, 'store']);
Route::get('/courses/{course-id}', [CoursesController::class, 'show']);
Route::put('/courses/{course-id}/update', [CoursesController::class, 'update']);
Route::delete('/courses/{course-id}/delete', [CoursesController::class, 'destroy']);

Route::get('/modules', [CoursesModulesController::class, 'index']);
Route::post('/modules/store', [CoursesModulesController::class, 'store']);
Route::get('/modules/{module-id}', [CoursesModulesController::class, 'show']);
Route::put('/modules/{module-id}/update', [CoursesModulesController::class, 'update']);
Route::delete('/modules/{module-id}/delete', [CoursesModulesController::class, 'destroy']);


