<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CompetitionController;

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

Route::get('/dashboard', function () {
  return view('dashboard.index');
});

Route::get('/prestasi', function () {
  return view('achievements.index');
});

Route::get('/buat-prestasi', function () {
  return view('achievements.create');
});

Route::get('/kompetisi', function () {
  return view('competitions.index');
});

Route::middleware(['guest'])->group(function () {
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

  Route::resource('achievements', AchievementController::class);
  Route::resource('ranks', RankController::class);
  Route::resource('competitions', CompetitionController::class);
});
