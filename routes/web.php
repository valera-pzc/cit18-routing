<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Default Laravel route for testing
Route::get('/', function () {
    return view('welcome');  // Use the default welcome page for testing
});

// GreetController route
Route::get('/greet', [GreetController::class, 'showGreeting']);

// Resource route for tasks
Route::resource('tasks', TaskController::class);
