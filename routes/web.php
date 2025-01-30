<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Employees;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReserveringController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UitslagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(\App\Http\Middleware\Admin::class)->group(function () {
    Route::get('/uitslag', [UitslagController::class, 'showAll'])->name('uitslag.showall');
    Route::get('/uitslag/{id}', [UitslagController::class, 'edit'])->name('uitslag.edit');
    Route::put('/uitslag/{id}', [UitslagController::class, 'update'])->name('uitslag.update');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/reservering', ReserveringController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
