<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\excelController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('excel', excelController::class)->only(['index', 'create', 'store']);


Route::resource('task',TaskController::class);

Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');

Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');

Route::get('/task/{tasks}/show', [TaskController::class, 'show'])->name('task.show');

Route::patch('/task/{task}/update', [TaskController::class, 'update'])->name('task.update');

Route::get('/task/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');

Route::delete('/task/{task}/delete', [TaskController::class, 'destroy'])->name('task.destroy');
// });


