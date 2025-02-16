<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('landing');
})->name('landing');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/links/create', [DashboardController::class, 'create'])->name('link.create');
    Route::post('/links', [DashboardController::class, 'store'])->name('link.store');
    Route::delete('/links/{link}', [DashboardController::class, 'destroy'])->name('link.delete');
    Route::get('/links/edit/{link}', [DashboardController::class, 'edit'])->name('link.edit');
    Route::post('/links/update/{link}', [DashboardController::class, 'update'])->name('link.update');
});

Route::get('/{link:short_url}', [DashboardController::class, 'show'])->name('link.show');
