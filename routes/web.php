<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index']);

Route::get('/add-task', [TaskController::class, 'addTask']);

Route::post('/save-task', [TaskController::class, 'saveTask']);

Route::get('/task-list', [TaskController::class, 'taskList']);

Route::get('/edit-task/{task}', [TaskController::class, 'editTask']);

Route::put('/update-task/{task}', [TaskController::class, 'updateTask']);

Route::delete('/delete-task/{task}', [TaskController::class, 'deleteTask']);




