<?php

use Illuminate\Support\Facades\Route;

// Eric's Routes (patanggal na lang nung mga page na di na need)
Route::redirect('/', '/register');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/home_teacher', function () {
    return view('home_teacher');
})->name('home_teacher');

Route::get('/home_admin', function () {
    return view('home_admin');
})->name('home_admin');

Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot_password');

Route::get('/gdrive', function () {
    return view('gdrive_API.gdrive');
})->name('gdrive');


//Karylle's Routes (Update Admin)
Route::get('/AdminDashboard', function () {
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
