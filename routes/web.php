<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\CheckAuthenticated;
use App\Http\Controllers\AIController;

Route::get('/', function () {
    return view('landing.welcome');
});

Route::any('try-for-free', [AuthController::class, 'register'])->name('register');
Route::any('login', [AuthController::class, 'login'])->name('login');

Route::middleware([CheckAuthenticated::class])->group(function () {
    Route::get('home', [ViewController::class, 'home'])->name('home');
    Route::get('edu', [ViewController::class, 'edu'])->name('edu');
    Route::get('leaderboard', [ViewController::class, 'leaderboard'])->name('leaderboard');
    Route::get('community', [ViewController::class, 'community'])->name('community');
    Route::get('trash/{trashid}', [ViewController::class, 'trash'])->name('trash');
    Route::get('profile', [ViewController::class, 'profile'])->name('profile');
    Route::get('/scan', function () {
        return view('app.scan.index');
    });
    Route::get('/profile/activity', function () {
        return view('app.profile.activity.index');
    });
    Route::get('/profile/edit', function () {
        return view('app.profile.edit.index');
    });
});
Route::post('upload', [AIController::class, 'handleUpload'])->name('upload');
