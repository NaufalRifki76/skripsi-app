@extends('layout.index')
@php
    use App\Models\Venue;
    use App\Models\VenuePhotos;
@endphp
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
        <div class="my-3">
            <a href="{{ route('lapangan-index') }}" class="text-decoration-none ">
                <button type="button" id="" name="" class="btn-green-hover">Kembali Ke Halaman Sebelumnya</button>
            </a>
        </div>
        <div class="card shadow" style="border: none; max-height: 500px;">
            <div >
                <div class="row">
                    <div class="col-md-6">
                        @php
                            $venues = Venue::where('id', $venue->id)->first();
                            if ($venues) {
                                $base64 = VenuePhotos::where('venue_id', $venues->id)->first();
                                echo '<div class="card-image card-circular">';
                                echo '<img class="rounded img-fluid" width="600px" style="max-height: 400px; border-radius:24px; border-top-left-radius: 12px; border-bottom-left-radius: 12px;" src="data:image/png;base64,' . $base64->venue_photo_base64 . '">';
                                echo '</div>';
                            }
                        @endphp
                        {{-- <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" class="img-fluid"
                            style="max-height: 400px; border-top-left-radius: 12px; border-bottom-left-radius: 12px;" alt="..."> --}}
                    </div>
                    <div class="col-md-6">
                        <div class="mt-4">
                            <h2 class="fw-bold" style="color: #439A97">{{$venue->venue_name}}</h2>
                            <p class="card-text mt-4 fs-5 me-4" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                {{$venue->venue_address}}</p>
                            <p class="card-text h4 fw-bold mt-4" style="color: #439A97">Lapangan Tersedia</p>
                            @php
                                $qty = $venues->field_detail()->count();
                            @endphp
                            <p class="card-text fs-5" style="margin-top: -10px">{{$qty}}</p>
                            <p class="card-text h4 fw-bold mt-4" style="color: #439A97">Harga mulai dari:</p>
                            @php
                                $start_price = $venues->field_detail()->min('field_cost_hour');
                            @endphp
                            <p class="card-text fs-5" style="margin-top: -10px">Rp <b class="fs-5">{{$start_price}}</b> / Jam</p>
                            <a href="{{ route('lapangan-order', ['id' => $venue->id]) }}" class="text-decoration-none ">
                                <button type="button" id="" name="" class="btn-green-hover">Cari
                                    Lapangan</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow my-4" style="border: none;">
            <div class="card-body">

                <div class="row mt-4">
                    <div class="col-md-7 px-3 text-center border-end">
                        <h4 class="fw-bold" style="color: #439A97"><u>Deskripsi Lapangan</u></h4>
                        <p class="fs-5 mt-3">{{$venue->venue_desc}}</p>
                    </div>
                    <div class="col-md-5 text-center">
                        <h4 class="fw-bold" style="color: #439A97"><u>Lokasi Lapangan</u></h4>
                        <p class="fs-5 mt-3">{{$venue->venue_address}}</p>
                    </div>
                </div>

                <div class="border opacity-50 my-5"></div>

                <div class="row">
                    <div class="col-md-7 px-5 text-center border-end">
                        <h4 class="fw-bold" style="color: #439A97"><u>Fasilitas</u></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center ms-5">
                                    @if ($venue->drinks == 1)
                                        <div class="flex-shrink-0 my-3">
                                            <img src="{{ asset('Assets/image-lapangan/drinks.png') }}" class="img-fluid"
                                                width="34px" alt="...">
                                        </div>
                                        <div class="ms-3">
                                            Minuman
                                        </div>
                                    @endif
                                </div>
                                <div class="d-flex align-items-center ms-5">
                                    @if ($venue->locker_room == 1)
                                        <div class="flex-shrink-0 my-3">
                                            <img src="{{ asset('Assets/image-lapangan/changing-room.png') }}" class="img-fluid"
                                                width="34px" alt="...">
                                        </div>
                                        <div class="ms-3">
                                            Ruang Ganti
                                        </div>
                                    @endif
                                </div>
                                <div class="d-flex align-items-center ms-5">
                                    @if ($venue->wifi == 1)
                                        <div class="flex-shrink-0 my-3">
                                            <img src="{{ asset('Assets/image-lapangan/wifi.png') }}" class="img-fluid"
                                                width="34px" alt="...">
                                        </div>
                                        <div class="ms-3">
                                            Wifi
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    @if ($venue->toilet == 1)
                                        <div class="flex-shrink-0 my-3">
                                            <img src="{{ asset('Assets/image-lapangan/toilet.png') }}" class="img-fluid"
                                                width="34px" alt="...">
                                        </div>
                                        <div class="ms-3">
                                            Toilet
                                        </div>
                                    @endif
                                </div>
                                <div class="d-flex align-items-center">
                                    @if ($venue->parking_space == 1)
                                        <div class="flex-shrink-0 my-3">
                                            <img src="{{ asset('Assets/image-lapangan/parking.png') }}" class="img-fluid"
                                                width="34px" alt="...">
                                        </div>
                                        <div class="ms-3">
                                            Parkir Kendaraan
                                        </div>
                                    @endif
                                </div>
                                <div class="d-flex align-items-center">
                                    @if ($venue->rent_equipments == 1)
                                        <div class="flex-shrink-0 my-3">
                                            <img src="{{ asset('Assets/image-lapangan/sewa-perlengkapan.png') }}"
                                                class="img-fluid" width="34px" alt="...">
                                        </div>
                                        <div class="ms-3">
                                            Sewa Perlengkapan
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <h4 class="fw-bold" style="color: #439A97"><u>Sewa Perlengkapan</u></h4>
                        <p class="fs-5" style="color: #FCE700; font-size: 16px">Main bola lebih mudah dengan sewa perlengkapan di
                            lapangan ini!</p>
                        <p class="fs-5 mt-3">Cari perlengkapan futsal yang anda inginkan
                            dengan menekan tombol di bawah!</p>
                        <a href="{{ route('sewa-perlengkapan') }}" id="" name="" class="btn-green-hover text-decoration-none">Cari
                            Perlengkapan</a>
                    </div>
                </div>

                {{-- <div class="border opacity-50 my-5"></div> --}}

                {{-- <div class="row mb-4">
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection
