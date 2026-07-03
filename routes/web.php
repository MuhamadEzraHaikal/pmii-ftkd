<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/beranda', function () {
    return view('home');
});

Route::get('/calender', function () {
    return view('calender');
});

Route::get('/struktur pengurus', function () {
    return view('struktur pengurus');
});

Route::get('/arsip administrasi', function () {
    return view('arsip administrasi');
});

// Route::get('/home', function () {
//     return redirect('/beranda');
// });

// Route::get('/calender', function () {
//     return view('calender');
// });