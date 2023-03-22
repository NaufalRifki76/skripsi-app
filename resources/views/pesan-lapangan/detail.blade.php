@extends('layout.index')

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
            </div>
        </div>
    </div>
    <div> 
        <p class="h3 fw-bold text-center mt-5"  style="color: #439A97">Pesan Lapangan Yang Anda Inginkan</p> 
    </div> 
    <form class="row g-3 mx-1">
        <div class="col-md-11">
            <label for="inputState" class="form-label">Pilih tanggal pemesanan lapangan</label>
            <input type="text" class="form-control" id="ExpiredDate" placeholder="">
        </div>
          <div class="col-md-1 mt-5">
            <button type="button" class="btn" style="background-color: #62B6B7; color: white">Search</button>
        </div>    
    </form>
    <div class="accordion mt-5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Lapangan A
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" alt="logo">
        </div>
        <div class="row text-center">
            <div class="col-md-4 px-3">
                <p class="fs-5 mt-2">Futsal </p>
            </div>
            <div class="col-md-4 px-3">
                <p class="fs-5 mt-2">Indoor</p>
            </div>
            <div class="col-md-4 px-3">
                <p class="fs-5 mt-2">Vynil</p>
            </div>
        </div>

        <p class="fs-5 mx-5 mt-5" style="margin-left: 10px">Pilih Jadwal Booking</p>


      <div class="accordion-body">
    
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Lapangan B
    </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Lapangan C
    </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection

