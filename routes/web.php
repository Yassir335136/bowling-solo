<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Employees;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(\App\Http\Middleware\Admin::class)->group(function () {
    Route::resource('/rows', \App\Http\Controllers\BowlingLane::class);
    Route::resource('employees', EmployeeController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('reservations', ReservationController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/scores', [App\Http\Controllers\ScoreController::class, 'index'])->name('scores.index');


require __DIR__ . '/auth.php';
