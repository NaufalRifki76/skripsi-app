<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPassController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Features\BookingController;
use App\Http\Controllers\Features\CompetitionController;
use App\Http\Controllers\Features\FAQController;
use App\Http\Controllers\Features\MiscController;
use App\Http\Controllers\Features\MitraController;
use App\Http\Controllers\Features\ProfileController;
use App\Http\Controllers\Features\RefundController;
use App\Http\Controllers\Features\VipController;
use App\Http\Controllers\SewaPerlengkapanController;
use App\Http\Controllers\Vendor\VendorController;

use Illuminate\Support\Facades\Route;

// Register
Route::get('register-user', [RegisterController::class, 'index'])->name('register-user');
Route::post('register-new', [RegisterController::class, 'create'])->name('register-new');
Route::get("email-confirm/{token}", [VerificationController::class, "parsingUrl"])->name("email-confirm");

// Login
Route::get('/', [AuthController::class, 'index'])->name('auth.dashboard');
// Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('auth.login');
Route::get('view', [AuthController::class, 'view'])->name('auth.view');
Route::get('return.login', [AuthController::class, 'returnLogin'])->name('return.login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// Profile
Route::match(['get', 'post'] ,'riwayat-order', [ProfileController::class, 'index'])->name('riwayat-order');
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
// Profile

// Route::get('/profile', function () {
//     return view('profile.index');
// })->name('profile.index');

// Subscribe
Route::get('subscribe.index', [VipController::class, 'index'])->name('subscribe.index');
Route::get('subscribe.startplan', [VipController::class, 'subscribe'])->name('subscribe.startplan');

// Booking Lapangan
Route::match(['get', 'post'], 'lapangan-index', [BookingController::class, 'index'])->name('lapangan-index');
Route::get('lapangan-detail/{id}', [BookingController::class, 'venuedetail'])->name('lapangan-detail');
Route::get('lapangan-order/{id}', [BookingController::class, 'order'])->name('lapangan-order');
Route::get('lapangan-order-date/{venueid}/{fieldid}', [BookingController::class, 'orderdate'])->name('lapangan-order-date');
Route::post('lapangan-order-time/{venueid}/{fieldid}', [BookingController::class, 'ordertime'])->name('lapangan-order-time');
Route::post('lapangan-confirm/{venueid}/{fieldid}/{date}', [BookingController::class, 'orderconfirm'])->name('lapangan-confirm');
Route::get('lapangan-transfer-funds/{rentorder_id}/{venue_id}', [BookingController::class, 'transferfunds'])->name('lapangan-transfer-funds');
Route::post('lapangan-transfer-store/{rentorder_id}', [BookingController::class, 'storetransfer'])->name('lapangan-transfer-store');

// Perlengkapan
Route::match(['get','post'], '/sewa-perlengkapan', [SewaPerlengkapanController::class, 'index'])->name('sewa-perlengkapan');

// Info Kompetisi
Route::get('kompetisi.index', [CompetitionController::class, 'index'])->name('kompetisi.index');
Route::match(['get', 'post'], 'tingkat-pendidikan.index', [CompetitionController::class, 'pendidikan'])->name('tingkat-pendidikan.index');
Route::match(['get', 'post'], 'tingkat-umur.index', [CompetitionController::class, 'umur'])->name('tingkat-umur.index');
Route::get('kompetisi-detail/{id}', [CompetitionController::class, 'detail'])->name('kompetisi-detail');

// Refund
Route::get('refund-snk', [RefundController::class, 'snk'])->name('refund-snk');
Route::get('refund-index', [RefundController::class, 'index'])->name('refund-index');
Route::get('refund-get-field/{id}', [RefundController::class, 'dependentfield'])->name('refund-get-field');
Route::get('refund-get-price/{id}', [RefundController::class, 'dependentprice'])->name('refund-get-price');
Route::post('refund-store', [RefundController::class, 'store'])->name('refund-store');

// Join Mitra
Route::get('mitra.index', [MitraController::class, 'index'])->name('mitra.index');
Route::post('mitra.join', [MitraController::class, 'store'])->name('mitra.join');

// Mitra
Route::get('mitra.home', [MitraController::class, 'mitraIndex'])->name('mitra.home');

// FAQ
Route::get('faq-index', [FAQController::class, 'index'])->name('faq-index');

//About-us
Route::get('aboutus-index', [MiscController::class, 'aboutus'])->name('aboutus-index');

// Vendor
Route::get('index-vendor', [VendorController::class, 'index'])->name('index-vendor');
Route::post('acc-order', [VendorController::class, 'accorder'])->name('acc-order');
Route::get('deny-order/{id}', [VendorController::class, 'denyorder'])->name('deny-order');
Route::get('detail-order/{id}', [VendorController::class, 'detailorder'])->name('detail-order');
Route::post('store-deny-order/{id}', [VendorController::class, 'storecancelorder'])->name('store-deny-order');

// --------------------- BAGIAN BAWAH INI UNTUK TESTING -------------------- //
// Route::get('/', function () {
//     return view('home.index');
// })->name('home');

// name('login')    name digunakan untuk memanggil route. \
// contoh jelek: href={{ url('/login') }}   
// contoh bagus: href={{ route('login') }}
// contoh pemakaian ada di view('layout.navbar')

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('auth.register');

//  Subscribe
// Route::get('/subscribe', function () {
//     return view('subscribe.index');
// })->name('subscribe.index');

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

Route::get('/pesan-lapangan-pilih-jam', function () {
    return view('pesan-lapangan.pilih-jam');
})->name('lapangan.pesan.jam');

Route::get('/riwayat-pemesanan', function () {
    return view('riwayat-pemesanan.index');
})->name('riwayat.pemesanan');

// Route::get('/daftar-lapangan', function () {
//     return view('mitra.join');
// })->name('mitra.join');

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



// Penyedia Lapangan
// Route::get('/home-mitra', function () {
//     return view('layout.penyedia-lapangan.index');
// })->name('mitra.index');

Route::get('/detail-pemesanan-mitra', function () {
    return view('layout.penyedia-lapangan.detail-pemesanan');
})->name('mitra.detail-pemesanan');


// faq
// Route::get('/faq-index', function () {
//     return view('faq.index');
// })->name('faq.index');


// tentang kami
Route::get('/tentang-kami', function () {
    return view('tentang-kami.index');
})->name('tentang-kami.index');


// forgot password
Route::get('/email', function () {
    return view('email.forgot-password');
})->name('email.forgot-password');

// Route::get('/kirim-email', function () {
//     return view('lupa-password.kirim-email');
// })->name('lupa-password.kirim-email');

Route::match(['get', 'post'],"/forgot-password/{token}", [ForgotPassController::class, 'changePass'])->name("forgot-pass-mail");

Route::get('/forgot-password', [ForgotPassController::class, 'index'])->name('forgotpass');

Route::post(
    '/forgotpass',
    [ForgotpassController::class, 'requestEmail']
)->name('forgotpass-insert');

Route::get('/ganti-password', function () {
    return view('lupa-password.ganti-password');
})->name('lupa-password.ganti-password');


// pengembalian dana
// Route::get('/pengembalian-dana', function () {
//     return view('pengembalian-dana.index');
// })->name('pengembalian-dana.index');

// Route::get('/syarat-pengembalian-dana', function () {
//     return view('pengembalian-dana.syarat-ketentuan');
// })->name('pengembalian-dana.syarat-ketentuan');

Route::get('/tolak-pemesanan', function () {
    return view('layout.penyedia-lapangan.tolak');
})->name('tolak-pemesanan');

