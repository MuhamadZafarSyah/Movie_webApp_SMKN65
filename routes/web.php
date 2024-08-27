<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', [PageController::class, 'index']);
    Route::get('/details-movie/{movie}', [PageController::class, 'show']);
    Route::get('/s', [PageController::class, 'index']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/auth', [AuthController::class, 'index'])->name('auth');
    Route::post('/auth', [AuthController::class, 'login']);
});
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::get('/chart-data', [DashboardController::class, 'getChartData']);

    Route::get('/chart-user', [DashboardController::class, 'getChartUser']);

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/dashboard/movie', [MovieController::class, 'index']);
    Route::delete('/dashboard/movie/{movie}/destroy', [MovieController::class, 'destroy']);
    Route::get('/dashboard/movie/{movie}/edit', [MovieController::class, 'edit']);
    Route::put('/dashboard/movie/{movie}/edit', [MovieController::class, 'update'])->name('movie.update');
    Route::get('/dashboard/movie/create', [MovieController::class, 'create']);
    Route::post('/dashboard/movie/create', [MovieController::class, 'store'])->name('movie.store');
});
