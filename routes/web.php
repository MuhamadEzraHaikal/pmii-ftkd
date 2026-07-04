<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();

        return redirect()->intended(route('beranda'));
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
});

Route::get('/struktur pengurus', function () {
    return view('public.struktur');
})->name('struktur pengurus');

Route::get('/arsip administrasi', function () {
    return view('admin.arsip');
})->name('arsip');

Route::get('/calender', function () {
    return view('anggota.agenda');
})->name('calender');

Route::get('/beranda', function () {
    return view('public.home');
})->name('beranda');

// Route::get('/home', function () {
//     return redirect('/beranda');
// });

// Route::get('/calender', function () {
//     return view('calender');
// });