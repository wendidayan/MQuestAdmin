<?php

use Illuminate\Support\Facades\Route;


//Admin Routes

Route::get('/', function () {
    return view('AdminDashboard');
});

Route::get('/English', function () {
    return view('English');
})->name('English');

Route::get('/Filipino', function () {
    return view('Filipino');
})->name('Filipino');

Route::get('/Mathematics', function () {
    return view('Mathematics');
})->name('Mathematics');

Route::get('/Science', function () {
    return view('Science');
})->name('Science');

Route::get('/ProfileSection', function () {
    return view('ProfileSection');
})->name('ProfileSection');

