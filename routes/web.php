<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::controller(AuthController::class)->group(function () {
  Route::get('/login', 'index')->name('auth.index');
  Route::post('/login', 'login')->name('auth.login');
  Route::get('/register', 'create')->name('auth.create');
  Route::post('/register', 'register')->name('auth.register');
});

Route::controller(StoryController::class)->group(function () {
  Route::get('/stories', 'index')->name('stories.index');
  Route::get('/stories/create', 'create')->name('stories.create');
});
