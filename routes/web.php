<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;


// Route::get('/', function () {
//     return view('karyawan.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    if (auth()->user()->role === 'admin') {
        $tasks = Task::all(); // kirim semua task ke admin
        return view('admin.dashboard', compact('tasks'));
    } elseif (auth()->user()->role === 'karyawan' || auth()->user()->role === 'employee') {
        return view('karyawan.dashboard');
    } else {
        return view('manajer.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



// Routes untuk admin mengelola task
Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::post('/tasks/{task}/assign', [TaskController::class, 'assignUser'])->name('tasks.assign');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
