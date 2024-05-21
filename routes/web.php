<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.code');
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/profile', function () {
    return view('page.profile');
});

Route::get('/kits', function () {
    return view('page.kits');
});

Route::get('/treatments', function () {
    return view('page.treatments');
});
