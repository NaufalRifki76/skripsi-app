@extends('layout.index')

@section('content')
<style>
    .background-img-riwayat {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Assets/riwayat-pemesanan/bg.jpg");
    }
</style>
<div class="container">
  <div class="py-5">
    <p class="h1 fw-bold text-center" style="color: #439A97">Halaman FAQ</p>
    <p class="h5 fw-normal text-center" style="color: #FCE700">Cari informasi yang mungkin anda ingin tanyakan di bawah!</p>
    <div class="row mt-5">
      <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="accordion" id="accordionExample">
            {{-- pertanyaan 1 --}}
            @foreach ($data as $key => $faq)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$key}}">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                    <strong>{{$faq->question}}</strong>
                  </button>
                </h2>
                <div id="collapse{{$key}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$key}}" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    {{$faq->answer}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>

@endsection