<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PortfolioController;
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
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::post('/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
    });

    Route::prefix('info')->group(function () {
        Route::get('/', [InfoController::class, 'index'])->name('info.index');
        Route::post('/', [InfoController::class, 'store'])->name('info.store');
        Route::get('/{info}', [InfoController::class, 'show'])->name('info.show');
        Route::post('/{info}', [InfoController::class, 'update'])->name('info.update');
        Route::get('{info}/delete', [InfoController::class, 'destroy'])->name('info.delete');
    });
    Route::prefix('feature')->group(function () {
        Route::get('/', [FeatureController::class, 'index'])->name('feature.index');
        Route::post('/', [FeatureController::class, 'store'])->name('feature.store');
        Route::get('/{feature}', [FeatureController::class, 'show'])->name('feature.show');
        Route::post('/{feature}', [FeatureController::class, 'update'])->name('feature.update');
        Route::get('{feature}/delete', [FeatureController::class, 'destroy'])->name('feature.delete');
    });
    Route::prefix('portfolio')->group(function () {
        Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
        Route::get('create', [PortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('/', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio.show');
        Route::get('/{portfolio}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::post('/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('{portfolio}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.delete');
        Route::get('{portfolio}/image/{image}/delete', [PortfolioController::class, 'removeImage'])->name('image.delete');
    });
});

require __DIR__.'/auth.php';
