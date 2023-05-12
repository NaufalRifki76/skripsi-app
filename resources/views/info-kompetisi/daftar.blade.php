@extends('layout.index')

@section('content')
<style>
    .background-img-riwayat {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Assets/riwayat-pemesanan/bg.jpg");
    }
</style>
<div class="container">
    <div class="py-5">
        <p class="h1 fw-bold text-center" style="color: #439A97">Publikasikan kompetisi anda di sini!</p>
        <p class="h5 fw-normal text-center" style="color: #FCE700">Bergabung dengan kami untuk menciptakan generasi futsal yang unggul!</p>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card my-5 background-img-riwayat shadow" style="border: none; border-radius: 12px;">
                    <div class="card-body">
                        <p class="h4 fw-bold my-3 text-center" style="color: #fff">Syarat dan Keuntungan Menjadi Media Partner Kami!</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card mb-3 shadow" style="border: none; border-radius: 12px;">
                                    <div class="card-body">
                                        <p class="h4 my-3 text-center" style="color: #439A97">Syarat Menjadi Media Partner Kami!</p>
                                        <p class="fs-6 mx-4 text-center">Menempatkan logo aplikasi Main Bola pada media cetak yang dipublikasikan dan perlengkapan yang digunakan pihak kompetisi.</p>
                                        {{-- <p class="fs-6 mx-4">2. Menempatkan logo aplikasi Main Bola pada perlengkapan yang digunakan oleh panitia kompetisi.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3 shadow" style="border: none; border-radius: 12px;">
                                    <div class="card-body">
                                        <p class="h4 my-3 text-center" style="color: #439A97">Keuntungan Menjadi Media Partner Kami!</p>
                                        <p class="fs-6 mx-4 text-center">Mendapatkan publikasi secara gratis untuk kompetisi futsal yang didaftarkan dan dapat dilihat oleh semua orang yang menggunakan aplikasi Main Bola.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <p class="h5 mt-5 text-center" style="color: #fff">Berminat menjadi media partner kami? Hubungi nomor di bawah untuk mengetahui informasi lebih lanjut!</p>
                                <p class="h5 mt-3 text-center" style="color: #fff">
                                    Admin 1: <b>081226599655</b>
                                    <br>
                                    Admin 2: <b>0212265996</b>
                                </p>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

@endsection