<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserContoller;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDetailController;
use App\Http\Controllers\StudentAddressController;
use App\Http\Controllers\StudentParentController;

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

// Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user',[UserContoller::class,'index']);
    Route::apiResource('students', StudentController::class);
    Route::apiResource('student-details', StudentDetailController::class);
    Route::apiResource('student-addresses', StudentAddressController::class);
    Route::apiResource('student-parents', StudentParentController::class);
});