<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Features\BookingController;
use App\Http\Controllers\Features\CompetitionController;
use App\Http\Controllers\Features\MitraController;
use App\Http\Controllers\Features\VipController;
use Illuminate\Support\Facades\Route;

// Register
Route::get('register-user', [RegisterController::class, 'index'])->name('register-user');
Route::post('register-new', [RegisterController::class, 'create'])->name('register-new');
Route::get("email-confirm/{token}", [VerificationController::class, "parsingUrl"])->name("email-confirm");

// Login
Route::get('/', [AuthController::class, 'index'])->name('auth.dashboard');
Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('auth.login');
Route::get('view', [AuthController::class, 'view'])->name('auth.view');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// Subscribe
Route::get('subscribe.index', [VipController::class, 'index'])->name('subscribe.index');
Route::get('subscribe.startplan', [VipController::class, 'subscribe'])->name('subscribe.startplan');

// Booking Lapangan
Route::get('lapangan.index', [BookingController::class, 'index'])->name('lapangan.index');

// Info Kompetisi
Route::get('kompetisi.index', [CompetitionController::class, 'index'])->name('kompetisi.index');
Route::get('tingkat-pendidikan.index', [CompetitionController::class, 'pendidikan'])->name('tingkat-pendidikan.index');
Route::get('tingkat-umur.index', [CompetitionController::class, 'umur'])->name('tingkat-umur.index');

// Mitra
Route::get('mitra.index', [MitraController::class, 'index'])->name('mitra.index');

// --------------------- BAGIAN BAWAH INI UNTUK TESTING -------------------- //
// Route::get('/', function () {
//     return view('home.index');
// })->name('home');

// name('login')    name digunakan untuk memanggil route. \
// contoh jelek: href={{ url('/login') }}   
// contoh bagus: href={{ route('login') }}
// contoh pemakaian ada di view('layout.navbar')

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

//  Subscribe
Route::get('/subscribe', function () {
    return view('subscribe.index');
})->name('subscribe.index');

// Lapangan
Route::get('/lapangan', function () {
    return view('lapangan.index');
});

Route::get('/lapangan-detail', function () {
    return view('lapangan.detail');
})->name('lapangan.detail');

Route::get('/pesan-lapangan', function () {
    return view('pesan-lapangan.index');
})->name('lapangan.pesan');

Route::get('/pesan-lapangan-detail', function () {
    return view('pesan-lapangan.pesan');
})->name('lapangan.pesan.detail');

Route::get('/pesan-lapangan-konfirmasi', function () {
    return view('pesan-lapangan.pesan-konfirmasi');
})->name('lapangan.pesan.konfirmasi');

Route::get('/pesan-lapangan-pembayaran', function () {
    return view('pesan-lapangan.pembayaran');
})->name('lapangan.pesan.pembayaran');

Route::get('/pesan-lapangan-sukses', function () {
    return view('pesan-lapangan.sukses');
})->name('lapangan.pesan.sukses');

Route::get('/riwayat-pemesanan', function () {
    return view('riwayat-pemesanan.index');
})->name('riwayat.pemesanan');

Route::get('/daftar-lapangan', function () {
    return view('mitra.join');
})->name('mitra.join');

// Perlengkapan
Route::get('/sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.index');
})->name('sewa-perlengkapan.index');

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

Route::get('/kompetisi-daftar', function () {
    return view('info-kompetisi.daftar');
})->name('daftar.kompetisi');

// Profile
Route::get('/profile', function () {
    return view('profile.index');
})->name('profile.index');