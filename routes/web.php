<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsserController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('user',UsserController::class);
