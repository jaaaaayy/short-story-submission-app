<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

Route::middleware('guest')->group(function () {
  Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('auth.index');
    Route::post('/login', 'login')->name('auth.login');
    Route::get('/register', 'create')->name('auth.create');
    Route::post('/register', 'register')->name('auth.register');
  });
});

Route::middleware('auth')->group(function () {
  Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

  Route::controller(StoryController::class)->group(function () {
    Route::get('/stories', 'index')->name('stories.index');
    Route::get('/stories/write', 'create')->name('stories.create');
    Route::post('/stories', 'store')->name('stories.store');
    Route::get('/stories/{id}', 'show')->name('stories.show');
  });

  Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile.index');
    Route::get('/profile/my-story-list', 'myStoryList')->name('profile.my-story-list');
  });
});
