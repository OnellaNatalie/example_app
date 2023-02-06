<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Auth;

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
Route::post('/add_student', [Controllers\StudentController::class, 'add_student']);
Route::get('/delete_student/{id}', [Controllers\StudentController::class, 'delete_student']);
Route::get('allStudent', [Controllers\StudentController::class, 'allStudent']);
Route::get('get_student/{id}', [Controllers\StudentController::class, 'get_student']);