@extends('layout.index')

@section('content')
<div>
    <div class="container"> 
        <div> 
            <p class="h1 fw-bold text-center mb-2"  style="color: #439A97">Berlangganan</p> 
        </div> 
        <div> 
            <p class="h5 fw-normal text-center mb-5 px-5"  style="color: #FCE700">Dapatkan keuntungan dalam 
                pemesanan lapangan dan peminjaman alat olahraga dengan berlangganan berama kami.</p> 
        </div> 
        <div class="row mt-3 d-flex justify-content-center"> 
            <div class="col-lg-4 mb-5  "> 
                <div style="border: none; border-radius: 12px" class="card border-3 d-flex shadow p-5 align-items-center justify-content-center"> 
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="300px" alt="logo">
                      </div>
                        <p class="h5 fw-bold pt-3" style="color: #439A97">AMATIR</p> 
                        <span class="price mb-3">  
                            <span class="number">Free</span>
                         </span> 
                            <ul class="mb-5 list-unstyled text-muted"> 
                                <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-check me-2"></i>Akses booking lapangan 30 hari</p> 
                                <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-check me-2"></i>Pinjam perlengkapan (1 alat)</p> 
                                <p style="font-size: 15px"><i style="color: #439A97 " class="fa-solid fa-check me-2"></i>Pinjam perlengkapan (1 alat)  </p> 
                            </ul> 
                            <button type="button" class="btn" style="background-color: #62B6B7; color: white">Subscribe</button>
                        </div> 
                    </div>

                         <div class="col-lg-4 mb-5"> 
                            <div style="border: none; border-radius: 12px" class="card border-3 d-flex shadow p-5 align-items-center justify-content-center"> 
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="300px" alt="logo">
                                  </div>
                                <p class="h5 fw-bold pt-3" style="color: #F7C04A">PROFESIONAL</p> 
                                <span class="price mb-3"> 
                                    <sup class="sup">Rp</sup> 
                                    <span class="number">999999999</span> 
                                </span> 
                                <div class="mb-5 list-unstyled text-muted"> 
                                    <p style="font-size: 15px"><i style="color: #F7C04A " class="fa-solid fa-check me-2"></i>Akses booking lapangan 60 hari</p> 
                                    <p style="font-size: 15px"><i style="color: #F7C04A " class="fa-solid fa-check me-2"></i>Gratis pinjam perlengkapan (1 alat)</p> 
                                    <p style="font-size: 15px"><i style="color: #F7C04A " class="fa-solid fa-check me-2"></i>Dapat meminjam lebih dari 1 alat </p> 
                                </div> 
                                <button type="button" class="btn" style="background-color: #F7C04A; color: white">Subscribe</button>
                            </div> 
                        </div> 
        </div>
    </div>
</div>
   

@endsection
