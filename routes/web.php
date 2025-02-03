<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Employees;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReserveringController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservingController;
use App\Http\Controllers\UitslagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// required to be admin class
Route::middleware(\App\Http\Middleware\Admin::class)->group(function () {
    Route::resource('/rows', \App\Http\Controllers\BowlingLane::class);
    Route::resource('employees', EmployeeController::class);
    Route::get('/reservingsadmin', [ReservingController::class, 'admin']);
    Route::get('/uitslag', [UitslagController::class, 'showAll'])->name('uitslag.showall');
    Route::get('/uitslag/{id}', [UitslagController::class, 'edit'])->name('uitslag.edit');
    Route::put('/uitslag/{id}', [UitslagController::class, 'update'])->name('uitslag.update');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('reservations', ReservationController::class);
    Route::resource('reservings', ReservingController::class);
    Route::resource('/reservering', ReserveringController::class);
    Route::post('/filter-date', [FilterController::class, 'filterDate'])->name('filter.date');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/scores', [App\Http\Controllers\ScoreController::class, 'index'])->name('scores.index');
Route::delete('/scores/{id}', [ScoreController::class, 'destroy'])->name('scores.destroy');
Route::get('/scores/create', [ScoreController::class, 'create'])->name('scores.create');
Route::post('/scores', [ScoreController::class, 'store'])->name('scores.store');
Route::get('/scores/{score}/edit', [ScoreController::class, 'edit'])->name('scores.edit');
Route::put('/scores/{score}', [ScoreController::class, 'update'])->name('scores.update');

route::get('/scores/{id}', [ScoreController::class, 'show'])->name('scores.show');

require __DIR__ . '/auth.php';
