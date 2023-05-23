@extends('layout.index')
@php
    use App\Models\Venue;
    use App\Models\VenuePhotos;
    use App\Models\FieldDetail;
@endphp
@section('content')

    <div class="container">
        <div class="card shadow" style="border: none; border-radius: 12px;">
            <div class="row">
                <div class="col-md-6">
                    @php
                        $venues = Venue::where('id', $venue->id)->first();
                        if ($venues) {
                            $base64 = VenuePhotos::where('venue_id', $venues->id)->first();
                            echo '<div class="card-image card-circular">';
                            echo '<img class="rounded img-fluid"style="max-height: 400px; border-top-left-radius: 12px; border-bottom-left-radius: 12px;" src="data:image/png;base64,' . $base64->venue_photo_base64 . '">';
                            echo '</div>';
                        }
                    @endphp
                    {{-- <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}" class="img-fluid"
                        style="max-height: 400px; border-top-left-radius: 12px; border-bottom-left-radius: 12px;"
                        alt="..."> --}}
                </div>
                <div class="col-md-6">
                    <div class="mt-5">
                        <h2 class="fw-bold" style="color: #439A97">{{$venue->venue_name}}</h2>
                        <p class="card-text mt-4 fs-5"
                            style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                            {{$venue->venue_address}}</p>
                        <p class="card-text h4 fw-bold mt-4" style="color: #439A97">Lapangan Tersedia</p>
                        @php
                            $qty = $venues->field_detail()->count();
                        @endphp
                        <p class="card-text fs-5" style="margin-top: -10px">{{$qty}}</p>
                        <p class="card-text h4 fw-bold mt-4" style="color: #439A97">Harga Mulai Dari</p>
                        @php
                            $start_price = $venues->field_detail()->min('field_cost_hour');
                        @endphp
                        <p class="card-text fs-5" style="margin-top: -10px">Rp <b class="fs-5">{{$start_price}}</b> / Jam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="h3 fw-bold text-center py-5" style="color: #439A97">Pesan Lapangan Yang Anda Inginkan</p>
            <div class="row mb-5">
                @foreach ($field as $key => $fields)
                    <div class="col-md-4">
                        <div class="card shadow mb-3" style="border: none; border-radius: 12px;">
                            @php
                                echo '<div class="card-image card-circular">';
                                echo '<img class="rounded img-fluid" style="border-top-left-radius: 12px; border-top-right-radius: 12px;" height="200" src="data:image/png;base64,' . $field_photo[$key] . '">';
                                echo '</div>';
                            @endphp
                            {{-- <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}"
                                style="border-top-left-radius: 12px; border-top-right-radius: 12px;" height="200"
                                alt="..."> --}}
                            <div class="card-body my-2">
                                <h5 class="card-title fw-bold">{{$fields->field_name}}</h5>
                                <p class="card-text my-4">Harga Sewa: <b>{{$fields->field_cost_hour}}</b> / jam</p>
                                <a href="{{ route('lapangan-order-date', ['venueid' => $venue->id, 'fieldid' => $fields->id]) }}"
                                    class="btn-green-hover text-decoration-none">Pesan Lapangan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4">
                    <div class="card shadow mb-3" style="border: none; border-radius: 12px;">
                        <img src="{{ asset('Assets/image-lapangan/lapangan-detail.jpg') }}"
                            style="border-top-left-radius: 12px; border-top-right-radius: 12px;" height="200"
                            alt="...">
                        <div class="card-body my-2">
                            <h5 class="card-title fw-bold">Lapangan A</h5>
                            <p class="card-text my-4">Harga Sewa: <b>150.000</b> / jam</p>
                            <a href="{{ route('lapangan.pesan.detail') }}"
                                class="btn-green-hover text-decoration-none">Pesan Lapangan</a>
                        </div>
                    </div>
                </div>
            </div>
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
