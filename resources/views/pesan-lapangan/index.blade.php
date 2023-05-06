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
                        <p class="card-text fw-bold" style="color: #439A97">Lapangan Tersedia</p>
                        <p class="card-text" style="margin-top: -10px">3</p>
                        <p class="card-text fw-bold" style="color: #439A97">Harga</p>
                        <p class="card-text" style="margin-top: -10px">Rp <b class="fs-5">150,000</b> / Jam</p>
                    </div>
                </div>
            </div>
            <p class="h3 fw-bold text-center py-5" style="color: #439A97">Pesan Lapangan Yang Anda Inginkan</p>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="card shadow" style="border: none; border-radius: 12px;">
                        <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" style="border-top-left-radius: 12px; border-top-right-radius: 12px;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Lapangan A</h5>
                          <p class="card-text my-4">Harga Sewa: <b>150.000</b> / jam</p>
                          <a href="{{ route('lapangan.pesan.detail') }}" class="btn-green-hover text-decoration-none">Pesan Lapangan</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow" style="border: none; border-radius: 12px;">
                        <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" style="border-top-left-radius: 12px; border-top-right-radius: 12px;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Lapangan B</h5>
                          <p class="card-text my-4">Harga Sewa: <b>150.000</b> / jam</p>
                          <a href="#" class="btn-green-hover text-decoration-none">Pesan Lapangan</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow" style="border: none; border-radius: 12px;">
                        <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" style="border-top-left-radius: 12px; border-top-right-radius: 12px;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Lapangan C</h5>
                          <p class="card-text my-4">Harga Sewa: <b>150.000</b> / jam</p>
                          <a href="#" class="btn-green-hover text-decoration-none">Pesan Lapangan</a>
                        </div>
                      </div>
                </div>
            </div>
            {{-- <div class="card shadow my-4" style="border: none; border-radius: 12px;">
                <div class="card-body">

                    <div class="row px-5">
                        <div class="col-md-10">
                            <label for="inputState" class="form-label">Pilih tanggal pemesanan lapangan</label>
                            <input type="date" class="form-control" id="ExpiredDate" placeholder="">
                        </div>
                        <div class="col-md-2 text-end mt-2">
                            <button type="button" class="btn-green-hover mt-4">Search</button>
                        </div>
                    </div>

                    <div class="accordion accordion-flush shadow mt-5 mx-5" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lapangan A
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="d-flex justify-content-center mt-3 px-3">
                                        <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}"
                                            class="img-fluid" style="border-radius: 12px; max-height: 500px" alt="logo">
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

                                    <p class="fs-5 fw-bold text-center mt-5" style="margin-left: 10px">Pilih Jadwal
                                        Booking</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Pilih Sesi Bermain</label>
                                                <select name="nama-user" id="nama-user" class="form-control input-sm select_2"
                                                    style="width: 100%;" data-placeholder="Select..*" required>
                                                    <option></option>
                                                    <option value="0">test</option>
                                                    <option value="1">test a</option>
                                                    <option value="2">test b</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputState" class="form-label">Harga</label>
                                                <input class="form-control" id="ExpiredDate" placeholder="">
                                            </div> 
                                            <div class="col-md-2 mt-4">
                                                <button type="button" class="btn-green-hover">Search</button>
                                            </div>                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and hiding
                                    via CSS transitions. You can modify any of this with custom CSS or overriding our
                                    default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                    the collapse plugin adds the appropriate classes that we use to style each element.
                                    These classes control the overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
      
    @endsection
@push('css')
    {{-- Select --}}
    <link rel="stylesheet" href="{{ url('plugins/select2/css/select2.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/select2/css/select2-bootstrap.css') }}">
@endpush

@push('scripts')
    {{-- Select --}}
    <script src="{{ url('plugins/select2/js/select2.full.js') }}"></script>

    <script>
        $('#nama-user').select2({
            theme: "bootstrap",
            placeholder: "Select",
            width: '100%',
            containerCssClass: ':all:',
        });
    </script>
@endpush
