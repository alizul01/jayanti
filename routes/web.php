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

Route::get('/admin/home', function () {
  return view('admin.index');
})->name('admin.home');

Route::get('/admin/ranks', function () {
  return view('admin.ranks.index');
})->name('admin.ranks');

Route::get('/admin/competitions', function () {
  return view('admin.competitions.index');
})->name('admin.competitions');

Route::get('/admin/competitions/create', function () {
  return view('admin.competitions.create');
})->name('admin.competitions.create');

Route::get('/admin/achievements', function () {
  return view('admin.achievements.index');
})->name('admin.achievements');

Route::middleware(['guest'])->group(function () {
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::resource('achievements', AchievementController::class);
  Route::resource('ranks', RankController::class);
  Route::resource('competitions', CompetitionController::class);
});
