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
                    <form action="{{ route('tingkat-pendidikan.index') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row py-5 mx-5">
                            <div class="col-md-6 mb-2">
                                <label for="inputState" class="form-label">Nama Kompetisi</label>
                                <input type="text" class="form-control" id="ExpiredDate" name="tour_name" placeholder="Tuliskan nama kompetisi yang ingin anda cari...">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Kategori Pendidikan</label>
                                <select id="inputState" class="form-select" name="category">
                                    <option selected value="-">Pilih Kategori ...</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Universitas">Universitas</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-4">
                                <button type="submit" class="btn-green-hover" style="margin-top: 6px">Cari Kompetisi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    </div>
    <div class="container row m-5">
        @foreach ($tournament as $key => $tUmur)
        <div class="col-md-4">
            
                <a class="text-dark" style="text-decoration: none" href="">
                <div class="card mb-3" style="border-radius: 12px">
                    <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}" class="card-img-top img-fluid"
                        style="height: 250px; border-top-left-radius: 12px; border-top-right-radius: 12px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-2" style="color: #439A97">{{$tUmur->tournament_name}}</h5>
                        <div class="d-flex my-3">
                            <i class="fa-solid fa-location-dot mt-1" style="margin-right: 10px"></i>
                            <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                {{$tUmur->tournament_address}}</p>
                        </div>
                        <p class="card-text mt-2" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                            {{$tUmur->tournament_detail}}</p>
                        <h6 class="mt-2">Biaya Pendaftaran</h6>
                        <p class="card-text">Rp <b>{{$tUmur->entry_fee}}</b></p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection
