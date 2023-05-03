@extends('layout.index')

@section('content')
<div style="background-color: #ECFAF0">
    <div class="container">
        <br>
        <div> 
            <p class="h1 fw-bold text-center mb-2"  style="color: #439A97">Kompetisi Tingkat Umur</p> 
        </div> 
        <div> 
            <p class="h5 fw-normal text-center mb-3"  style="color: #FCE700">Tingkatkan bakat dan kemampuan yang anda miliki dengan mengikuti kompetisi sesuai kategori usia atau pendidikan yang tersedia</p> 
        </div> 
        <div class="row g-3 mx-5">
            <div class="col-md-7">
                <label for="inputState" class="form-label">Nama Kompetisi</label>
                <input type="text" class="form-control" id="ExpiredDate" placeholder="">
            </div>
            <div class="col-md-3">
                <label for="inputState" class="form-label">Kategori Umur</label>
                <select id="inputState" class="form-select">
                  <option selected>Pilih Kategori ...</option>
                  <option value="1">17</option>
                  <option value="2">20</option>
                  <option value="3">23</option>
                  <option value="3">Tidak Ada Batasan</option>
                </select>
              </div>
              <div class="col-md-2 mt-5">
                <button type="button" class="btn" style="background-color: #62B6B7; color: white">Search</button>
            </div>    
        </div>
    </div>
    <br>
    <br>
</div>
<div class="row m-5">
    <div class="col-md-4">
        <a class="text-dark" style="text-decoration: none" href="">
            <div class="card mb-3" style="border-radius: 12px">
                <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}" class="card-img-top img-fluid"
                    style="height: 250px; border-top-left-radius: 12px; border-top-right-radius: 12px"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #439A97">Nama Kompetisi</h5>
                    <div class="d-flex">
                        <i class="fa-solid fa-location-dot mt-1" style="margin-right: 10px"></i>
                        <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Jalan. Maja Pahit Permai, Karet Tengsin, Tanah Abang, Jakarta Pusat, DKI Jakarta, 10330</p>
                    </div>
                    <p class="card-text mt-2"
                        style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Some quick
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
