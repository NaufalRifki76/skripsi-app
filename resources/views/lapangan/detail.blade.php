@extends('layout.index')
<style>
    @media screen and (max-width: 765px) {
        .web-pembatalan {
            display: none;
        }
    }

    @media screen and (min-width: 766px) {
        .mobile-pembatalan {
            display: none;
        }

        .margin-pembatalan {
            margin-top: -20px;
        }
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" class="img-fluid"
                    style="max-height: 500px; border-radius: 12px" alt="...">
            </div>
            <div class="col-md-5">
                <div class="card shadow" style="border: none; border-radius: 12px; max-height: 500px;">
                    <div class="card-body text-center">
                        <h4 style="color: #439A97">Stadion Madya Gelora Bung Karno</h4>
                        <p class="card-text mt-3" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                            Jl. Setia Budi Barat No.1, Kuningan, Setia Budi</p>
                        <p class="card-text fw-bold" style="color: #439A97">Jenis Lapangan</p>
                        <p class="card-text" style="margin-top: -10px">Futsal/Sepak Bola/Mini Soccer</p>
                        <p class="card-text fw-bold" style="color: #439A97">Harga</p>
                        <p class="card-text" style="margin-top: -10px">Rp <b class="fs-5">150,000</b> / Jam</p>
                        <button type="button" id="" name="" class="btn-green-hover">Cari
                            Lapangan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow my-4" style="border: none; border-radius: 12px;">
            <div class="card-body">

                <div class="row mt-4">
                    <div class="col-md-7 px-3 text-center border-end">
                        <h4 style="color: #439A97"><u>Deskripsi Lapangan</u></h4>
                        <p class="fs-6 mt-3">Lapangan futsal Sintetis. 3 lapangan. Ukuran 18 x 20 m. Lokasi diatas Plaza
                            Kenari Mas Kramat Raya</p>
                    </div>
                    <div class="col-md-5 text-center">
                        <h4 style="color: #439A97"><u>Lokasi Lapangan</u></h4>
                        <p class="fs-6 mt-3">Jl. Asia Afrika, RT.1/RW.3, Gelora, Kecamatan
                            Tanah Abang, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 10270</p>
                        <button type="button" id="" name="" class="btn-green-hover">Buka Peta</button>
                    </div>
                </div>

                <div class="border opacity-50 my-5"></div>

                <div class="row">
                    <div class="col-md-7 px-3 text-center border-end">
                        <h4 style="color: #439A97"><u>Fasilitas</u></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center ms-5">
                                    <div class="flex-shrink-0 my-3">
                                        <img src="{{ asset('Assets/image-lapangan/drinks.png') }}" class="img-fluid"
                                            width="34px" alt="...">
                                    </div>
                                    <div class="ms-3">
                                        Minuman
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-5">
                                    <div class="flex-shrink-0 my-3">
                                        <img src="{{ asset('Assets/image-lapangan/changing-room.png') }}" class="img-fluid"
                                            width="34px" alt="...">
                                    </div>
                                    <div class="ms-3">
                                        Ruang Ganti
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-5">
                                    <div class="flex-shrink-0 my-3">
                                      <img src="{{ asset('Assets/image-lapangan/wifi.png') }}" class="img-fluid" width="34px" alt="...">
                                    </div>
                                    <div class="ms-3">
                                      Wifi
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center ms-5">
                                    <div class="flex-shrink-0 my-3">
                                        <img src="{{ asset('Assets/image-lapangan/toilet.png') }}" class="img-fluid"
                                            width="34px" alt="...">
                                    </div>
                                    <div class="ms-3">
                                        Toilet
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-5">
                                    <div class="flex-shrink-0 my-3">
                                        <img src="{{ asset('Assets/image-lapangan/parking.png') }}" class="img-fluid"
                                            width="34px" alt="...">
                                    </div>
                                    <div class="ms-3">
                                        Parkir Kendaraan
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-5">
                                    <div class="flex-shrink-0 my-3">
                                        <img src="{{ asset('Assets/image-lapangan/sewa-perlengkapan.png') }}" class="img-fluid"
                                            width="34px" alt="...">
                                    </div>
                                    <div class="ms-3">
                                        Sewa Perlengkapan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <h4 style="color: #439A97"><u>Sewa Perlengkapan</u></h4>
                        <p style="color: #FCE700; font-size: 16px">Main bola lebih mudah dengan sewa perlengkapan di website
                            kami!</p>
                        <p class="fs-6 mt-3">Cari perlengkapan futsal, sepak bola, atau mini soccer yang anda inginkan
                            dengan menekan tombol di bawah!</p>
                        <button type="button" id="" name="" class="btn-green-hover">Sewa
                            Perlengkapan</button>
                    </div>
                </div>

                <div class="border opacity-50 my-5"></div>

                <div class="row mb-4">
                    <div class="col-md-5 text-center mobile-pembatalan">
                        <img src="{{ asset('Assets/image-lapangan/pembatalan-transaksi.png') }}" width="60%"
                            class="img-fluid mb-3" style="" alt="...">
                    </div>
                    <div class="col-md-7 text-center mb-5">
                        <h4 style="color: #439A97"><u>Kebijakan Pembatalan Lapangan</u></h4>
                        <p class="fs-6 mt-3">Pengguna dapat membatalkan transaksi paling lambat 3 hari sebelum waktu yang
                            dipilih. <b>(Uang pemesanan akan dikembalikan 100%)</b></p>
                        <p class="fs-6">
                            Pengguna tidak dapat membatalkan transaksi!
                        </p>
                    </div>
                    <div class="col-md-5 text-center web-pembatalan">
                        <img src="{{ asset('Assets/image-lapangan/pembatalan-transaksi.png') }}" width="60%"
                            class="img-fluid margin-pembatalan" style="" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
