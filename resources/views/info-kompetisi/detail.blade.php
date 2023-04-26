@extends('layout.index')
@section('content')
<div class="container">

    <div> 
        <h2 class="fw-bold mt-2"  style="color: #439A97">Hydro Coco Futsal</h3>
        <p class="card-text" style="margin-top:-5px" style="color: #439A97" >Futsal/Sepak Bola/Mini Soccer</p>
    </div> 
    <div class="row mt-3">
    <div class="col-md-5">
        <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" class="img-fluid"
            style="max-height: 500px; border-radius: 12px" alt="...">
    </div>
    <div class="col-md-7">
        <div class="card shadow" style="border: none; border-radius: 12px; max-height: 500px;">
            <div class="card-body">
                <h4 style="color: #439A97"><u>Deskripsi</u></h4>
                <p class="card-text mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis porta velit. Ut iaculis at dolor quis gravida. 
                    Donec et scelerisque purus. Sed at elit sed ligula commodo auctor.</p>

                <h4 style="color: #439A97"><u>Lokasi</u></h4>
                <p class="card-text mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis porta velit. Ut iaculis at dolor quis gravida. 
                    Donec et scelerisque purus. Sed at elit sed ligula commodo auctor.</p>
            </div>
        </div>
    </div>
</div>

<div class="card shadow my-4" style="border: none; border-radius: 12px;">
    <div class="card-body">

        <div class="row mt-4">
            <div class="col-md-4 px-3 text-center border-end">
                <h4 style="color: #439A97"><u>Biaya Pendaftaran</u></h4>
                <p class="fs-5 mt-2">Rp 2.000.000</p>

            </div>
            <div class="col-md-4 px-3 text-center border-end">
                <h4 style="color: #439A97"><u>Tanggal Pendaftaran</u></h4>
                <p class="fs-5" >17 Februari 2023 </p>
                <p class="fs-5" style="margin-top: -15px">sampai</p>
                <p class="fs-5" style="margin-top: -15px">20 Desember 2023</p>

            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: #439A97"><u>Tanggal Kompetisi Dimulai</u></h4>
                <p class="fs-5" >17 Februari 2023 </p>
                <p class="fs-5" style="margin-top: -15px">sampai</p>
                <p class="fs-5" style="margin-top: -15px">20 Desember 2023</p>
            </div>
        </div>
        <div class="border opacity-50 my-5"></div>
        <div class="row mt-4">
            <div class="col-md-4 px-3 text-center border-end">
                <h4 style="color: #439A97"><u>Kategori Kompetisi</u></h4>
                <p class="fs-5">Universitas</p>
            </div>
            <div class="col-md-4 text-center border-end">
                <h4 style="color: #439A97"><u>Jumlah Tim Berpartisipasi</u></h4>
                <p class="fs-5" > 30 Tim </p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: #439A97"><u>Contact Person</u></h4>
                <p class="fs-5" >0812 2788 9877 </p>
                <p class="fs-5" style="margin-top: -15px">dan</p>
                <p class="fs-5" style="margin-top: -15px">021 7899 9655</p>
            </div>
        </div>
    </div>
</div>
@endsection
