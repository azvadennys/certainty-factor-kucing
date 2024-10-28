<?php

use App\Http\Controllers\AnimasiController;
use App\Http\Controllers\CFController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SerumController;
use App\Http\Controllers\PengetahuanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UserController;
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

Route::get('/', [LandingPage::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('serums', SerumController::class)->except(['show']);
    Route::resource('gejalas', GejalaController::class)->except(['show']);
    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('animasi', AnimasiController::class)->except(['show']);

    Route::get('/pengetahuan/select2Serum', [PengetahuanController::class, 'select2Serum'])->name('serums.select2');
    Route::get('/pengetahuan/select2Gejala', [PengetahuanController::class, 'select2Gejala'])->name('gejalas.select2');
    Route::get('/pengetahuan', [PengetahuanController::class, 'index'])->name('pengetahuan.index');
    Route::get('/pengetahuan/create', [PengetahuanController::class, 'create'])->name('pengetahuan.create');
    Route::post('/pengetahuan', [PengetahuanController::class, 'store'])->name('pengetahuan.store');
    Route::get('/pengetahuan/{id}/edit', [PengetahuanController::class, 'edit'])->name('pengetahuan.edit');
    Route::put('/pengetahuan/{id}', [PengetahuanController::class, 'update'])->name('pengetahuan.update');
    Route::delete('/pengetahuan/{id}', [PengetahuanController::class, 'destroy'])->name('pengetahuan.destroy');
});
Route::get('/konsultasi', [CFController::class, 'showForm'])->name('diagnosa');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/konsultasi', [CFController::class, 'calculateCF'])->name('calculate.cf');

    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
    Route::get('/riwayat/{id}', [RiwayatController::class, 'show'])->name('riwayat.show');
    Route::delete('/riwayat/{id}', [RiwayatController::class, 'destroy'])->name('riwayat.destroy');
});
require __DIR__ . '/auth.php';
