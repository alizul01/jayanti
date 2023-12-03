<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ImportController;


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


Route::get('/admin/achievements', function () {
  return view('admin.achievements.index');
})->name('admin.achievements');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/ranks', [AdminController::class, 'rank'])->name('admin.ranks');
  Route::resource('competitions', CompetitionController::class);
  Route::prefix('/achievements')->group(function () {
    Route::get('/', [AchievementController::class, 'index'])->name('achievement.admin.index');
  });
  Route::get('/upload-form', [ImportController::class, 'showUploadForm'])->name('import.form');
  Route::post('/upload', [ImportController::class, 'upload'])->name('import.upload');

});

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

  // route untuk post create achievement
  Route::post('/store/achievements', [AchievementController::class, 'store'])->name('achievements.store');
});

