@extends('layout.index')

@section('content')
    <div class="container">
        <div>
            <p class="h1 fw-bold text-center mb-2" style="color: #439A97">Info Kompetisi</p>
        </div>
        <div>
            <p class="h5 fw-normal text-center mb-5" style="color: #FCE700">Tingkatkan bakat dan kemampuan yang anda miliki
                dengan mengikuti kompetisi sesuai kategori usia atau pendidikan yang tersedia !</p>
        </div>

        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-lg-4 mb-5">
                <div class="d-flex justify-content-center">
                    <p class="fw-bold" style="color: #439A97">Kompetisi Tingkat Sekolah</p>
                </div>

                <a href="{{route('tingkat-pendidikan.index')}}" class="text-decoration-none">
                    <div class="card d-flex shadow align-items-center" style="border-radius: 12px; border: none"  >
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="300px" alt="logo">
                        </div>
                        <p class="h-1 fw-bold pt-3" style="color: #439A97">Kategori Pendidikan :</p>
                        <div class="mb-5 text-muted">
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>SD</p>
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>SMP
                            </p>
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>SMA
                            </p>
                            <p style="font-size: 15px"><i style="color: #439A97 "
                                    class="fa-solid fa-futbol me-2"></i>UNIVERSITAS</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="d-flex justify-content-center">
                    <p class="fw-bold" style="color: #439A97">Kompetisi Kategori Umur</p>
                </div>
                <a href="{{route('tingkat-umur.index')}}" class="text-decoration-none">
                    <div class="card d-flex shadow align-items-center" style="border-radius: 12px; border: none">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="300px" alt="logo">
                        </div>
                        <p class="h-1 fw-bold pt-3" style="color: #439A97">Kategori Umur :</p>
                        <div class="mb-5 text-muted">
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>Usia
                                16 Tahun</p>
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>Usia
                                19 Tahun</p>
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>Usia
                                19 Tahun</p>
                            <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-futbol me-2"></i>Semua
                                Usia (Umum)</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection
