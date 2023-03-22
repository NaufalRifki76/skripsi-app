<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

// Register
Route::get('/register-user', [RegisterController::class, 'index'])->name('register-user');
Route::post('/register-new', [RegisterController::class, 'create'])->name('register-new');
Route::get("/email-confirm/{token}", [VerificationController::class, "parsingUrl"])->name("email-confirm");

// Login
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('auth.login');


// --------------------- BAGIAN BAWAH INI UNTUK TESTING -------------------- //
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

//  Subscribe
Route::get('/subscribe', function () {
    return view('subscribe.index');
});

// Lapangan
Route::get('/lapangan', function () {
    return view('lapangan.index');
});

Route::get('/lapangan-detail', function () {
    return view('lapangan.detail');
});

Route::get('/pesan-lapangan', function () {
    return view('pesan-lapangan.index');
});


// Perlengkapan
Route::get('/sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.index');
});

// Kompetisi
Route::get('/info-kompetisi', function () {
    return view('info-kompetisi.index');
});

Route::get('/tingkat-sekolah', function () {
    return view('info-kompetisi.tingkat-sekolah');
});

Route::get('/tingkat-umur', function () {
    return view('info-kompetisi.tingkat-umur');
});

Route::get('/kompetisi-detail', function () {
    return view('info-kompetisi.detail');
});





