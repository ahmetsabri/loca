<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class,'index'])->name('category.index');
        Route::post('/', [CategoryController::class,'store'])->name('category.store');
        Route::get('/{category}', [CategoryController::class,'show'])->name('category.show');
        Route::post('/{category}', [CategoryController::class,'update'])->name('category.update');
        Route::get('{category}/delete', [CategoryController::class,'destroy'])->name('category.delete');
    });
});

require __DIR__.'/auth.php';
