<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\QTinController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ThongtinController;

Route::get('/', [TinController::class, 'index']);
// Route::get('/tin/{id}', [TinController::class, 'chitiet']);
// Route::get('/cat/{id}', [TinController::class, 'tintrongloai']);

Route::get('/tin', [QTinController::class, 'index']);
Route::get('/tin/them', [QTinController::class, 'create']);
Route::post('/tin/them', [QTinController::class, 'store']);
Route::delete('/tin/{id}', [QTinController::class, 'destroy']);
Route::get('/tin/sua/{id}', [QTinController::class, 'edit']);
Route::post('/tin/sua/{id}', [QTinController::class, 'update']);

Route::Resource('products', App\Http\Controllers\ProductController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
