<?php

use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'create']);
Route::post('/api/add-student', [StudentController::class, 'store']);
Route::post('/api/deleteAll', [StudentController::class, 'deleteAll']);
