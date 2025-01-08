<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckAuthenticated;

Route::get('/', function () {
    return view('landing.welcome');
});

Route::any('try-for-free', [AuthController::class, 'register'])->name('register');
Route::any('login', [AuthController::class, 'login'])->name('login');

Route::middleware([CheckAuthenticated::class])->group(function () {
    Route::get('/home', function () {
        return view('app.index');
    });
    Route::get('/leaderboard', function () {
        return view('app.leadeboard.index');
    });
    Route::get('/edu', function () {
        return view('app.education.index');
    });
    Route::get('/profile', function () {
        return view('app.profile.index');
    });
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
