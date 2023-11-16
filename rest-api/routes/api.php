<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// deafult
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
    
// praktikum 7
Route::middleware('auth:sanctum')->group(function () {
    # Method GET, route /students
    Route::get('/students', [StudentController::class, 'index']);
    # Create student
    Route::post('/students', [StudentController::class, 'store']);;
    # Update student
    Route::put('/students/{id}', [StudentController::class, 'update']);;
    # Delete student
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);;
});

// praktikum 7
Route::post('/login', 
[AuthController::class, 'login']);

Route::post('/register', 
[AuthController::class, 'register']);

// Pertemuan 4
// method GET
Route::get('/animals', 
[AnimalController::class, 'index']);

// method POST
Route::post('/animals', 
[AnimalController::class, 'store']);


// method PUT
Route::put('/animals/{id}', 
[AnimalController::class, 'update']);


// method DELETE
Route::delete('/animals/{id}', 
[AnimalController::class, 'destroy']);

// Pertemuan 5
// method GET
Route::get('/students', 
[StudentController::class, 'index']);

// method POST
Route::post('/students', 
[StudentController::class, 'store']);


// method PUT
Route::put('/students/{id}', 
[StudentController::class, 'update']);


// method DELETE
Route::delete('/students/{id}', 
[StudentController::class, 'destroy']);

// Praktikum 6
// GET detail data Student
Route::get('/students/{id}',
[StudentController::class, 'show']);
