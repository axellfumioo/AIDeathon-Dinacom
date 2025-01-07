<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.welcome');
});

Route::get('/try-for-free', function () {
    return view('landing.try-for-free.index');
});

Route::get('/login', function () {
    return view('landing.login.index');
});
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
