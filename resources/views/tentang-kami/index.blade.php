@extends('layout.index')

@section('content')
    <div class="container">
        <div class="text-center">
            <p class="h1 fw-bold text-center" style="color: #439A97">Tentang Kami</p>
        </div>
        <div class="row mt-5">
            <div class="card shadow mb-5" style="border: none; border-radius: 12px">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('Assets/logo/logo-tanpa-bg.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 p-3">
                        <p class="h3 fw-bold mt-3">Main Bola</p>
                        <p class="fs-6 mt-3" style="text-align: justify"><b>Main Bola</b> adalah aplikasi berbasis website
                            yang dapat digunakan untuk melakukan
                            pemesanan lapangan futsal secara online, dan melakukan pembayaran secara online. Aplikasi
                            <b>Main
                                Bola</b> juga memberikan informasi tentang lapangan yang juga menyediakan penyewaan
                            perlengkapan
                            futsal. Pengguna juga dapat menemukan informasi kompetisi futsal dalam kategori pendidikan dan
                            umur di aplikasi <b>Main Bola</b>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <p class="h3 fw-bold mt-3 text-center mb-5">Hubungi Kami</p>
            <div class="col-md-4 mb-5">
                <div class="card shadow"
                    style="border: none; border-top-left-radius: 24px; border-bottom-right-radius: 24px; height: 200px;">
                    <div class="card-body text-center mt-2">
                        <i class="fa-solid fa-location-dot h1" style="color: #439A97"></i>
                        <p class="h5 fw-bold mt-3">Lokasi:</p>
                        <p class="fs-6 mt-3">Jalan Kebon Jeruk Raya No.27, RT.1/RW.9, Kebon Jeruk, Kb. Jeruk, Kota Jakarta
                            Barat, DKI Jakarta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow"
                    style="border: none; border-top-left-radius: 24px; border-bottom-right-radius: 24px; height: 200px;">
                    <div class="card-body text-center mt-2">
                        <i class="fa-solid fa-envelope h1" style="color: #439A97"></i>
                        <p class="h5 fw-bold mt-3">Email:</p>
                        <p class="fs-5 mt-3">mainbola@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow"
                    style="border: none; border-top-left-radius: 24px; border-bottom-right-radius: 24px; height: 200px;">
                    <div class="card-body text-center mt-2">
                        <i class="fa-solid fa-phone h1" style="color: #439A97"></i>
                        <p class="h5 fw-bold mt-3">Kontak:</p>
                        <p class="fs-6 mt-2">(+62) 812 2632 8557</p>
                        <p class="fs-6" style="margin-top: -10px">(+62) 813 2662 8237</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <p class="h3 fw-bold mt-3 text-center mb-5">Tim Kami</p>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <div class="card shadow mb-3"
                    style="border: none; border-top-left-radius: 24px; border-bottom-right-radius: 24px;">
                    <img src="{{ asset('Assets/tentang-kami/naufal.jpg') }}" class="img-fluid"
                        style="border-top-left-radius: 24px;" alt="">
                        <p class="fs-6 mt-3 text-center fw-bold">Naufal Rifki Fauzan <br> 2301890693</p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="card shadow mb-3"
                    style="border: none; border-top-left-radius: 24px; border-bottom-right-radius: 24px;">
                    <img src="{{ asset('Assets/tentang-kami/faldian.jpeg') }}" class="img-fluid"
                        style="border-top-left-radius: 24px;" alt="">
                        <p class="fs-6 mt-3 text-center fw-bold">Faldian Pratama Wijaya <br> 2301891746</p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="card shadow mb-3"
                    style="border: none; border-top-left-radius: 24px; border-bottom-right-radius: 24px;">
                    <img src="{{ asset('Assets/tentang-kami/faris.jpg') }}" class="img-fluid"
                        style="border-top-left-radius: 24px;" alt="">
                        <p class="fs-6 mt-3 text-center fw-bold">Faris Hakim <br> 2301915866</p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
