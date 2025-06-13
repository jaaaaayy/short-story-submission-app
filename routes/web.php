<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::controller(AuthController::class)->group(function () {
  Route::get('/login', 'index')->name('auth.index');
});
