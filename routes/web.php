<?php

use Illuminate\Support\Facades\Route;


// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home.index');
})->name('home');

// name('login')    name digunakan untuk memanggil route. \
// contoh jelek: href={{ url('/login') }}   
// contoh bagus: href={{ route('login') }}
// contoh pemakaian ada di view('layout.navbar')
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/subscribe', function () {
    return view('subscribe.index');
});

Route::get('/lapangan', function () {
    return view('lapangan.index');
});

Route::get('/sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.index');
});

Route::get('/info-kompetisi', function () {
    return view('info-kompetisi.index');
});

Route::get('/tingkat-sekolah', function () {
    return view('info-kompetisi.tingkat-sekolah');
});


Route::get('/tingkat-umur', function () {
    return view('info-kompetisi.tingkat-umur');
});

