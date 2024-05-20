<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/tasks/{task}', [TaskController::class, 'edit']);
Route::put('/tasks/{task}', [TaskController::class, 'update']);

Route::get('/tasks/{task}/delete', [TaskController::class, 'destroy']);
Route::get('/tasks/{task}/swap', [TaskController::class, 'swap']);
