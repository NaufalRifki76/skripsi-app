@extends('layout.index')

@section('content')
    <div style="background-color: #ECFAF0">
        <div class="container">
            <div style="background-color: #ECFAF0">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 text-center py-4"
                            style="background-color: #439a97; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px">
                            <h1 style="color: white">Kompetisi Tingkat Sekolah</h1>
                            <h5 class="mx-3" style="color: #FCE700">Tingkatkan bakat dan kemampuan yang anda miliki
                                dengan mengikuti kompetisi sesuai kategori pendidikan yang tersedia</h5>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row py-5 mx-5">
                        <div class="col-md-6 mb-2">
                            <label for="inputState" class="form-label">Nama Kompetisi</label>
                            <input type="text" class="form-control" id="ExpiredDate" placeholder="Tuliskan nama kompetisi yang ingin anda cari...">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Kategori Pendidikan</label>
                            <select id="inputState" class="form-select">
                                <option selected>Pilih Kategori ...</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="3">SMA</option>
                                <option value="3">Universitas</option>
                            </select>
                        </div>
                        <div class="col-md-2 mt-4">
                            <button type="button" class="btn-green-hover" style="margin-top: 6px">Cari Kompetisi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    </div>
    <div class="container row m-5">
        <div class="col-md-4">
            <a class="text-dark" style="text-decoration: none" href="">
                <div class="card mb-3" style="border-radius: 12px">
                    <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}" class="card-img-top img-fluid"
                        style="height: 250px; border-top-left-radius: 12px; border-top-right-radius: 12px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-2" style="color: #439A97">Nama Kompetisi</h5>
                        <div class="d-flex my-3">
                            <i class="fa-solid fa-location-dot mt-1" style="margin-right: 10px"></i>
                            <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                Jalan. Maja Pahit Permai, Karet Tengsin, Tanah Abang, Jakarta Pusat, DKI Jakarta, 10330</p>
                        </div>
                        <p class="card-text mt-2" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                            Some quick
                            example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <h6 class="mt-2">Biaya Pendaftaran</h6>
                        <p class="card-text">Rp <b>250.000</b></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
