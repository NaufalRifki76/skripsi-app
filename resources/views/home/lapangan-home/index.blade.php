@php
    use App\Models\Venue;
    use App\Models\VenuePhotos;
@endphp
<style>
    @media screen and (max-width: 765px) {
        .mobile-img {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-mob {
            margin-bottom: 10px;
        }
    }

    @media screen and (min-width: 766px) {
        .web-img {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            height: 200px;
        }

        .card-size-web {
            max-height: 241px;
        }
    }
</style>
<br>
<br>
<br>
<div class="container mt-5">
    <h1 class="fw-bold" style="color: #439A97">Lapangan Yang Tersedia</h1>
    <div class="row mt-5">
        @foreach ($venue as $key => $venues)
            @if($loop->index < 2)
                <div class="col-md-6">
                    <a class="text-dark text-decoration-none" href="{{route('lapangan-detail', ['id' => $venues->id])}}">
                        <div class="card mb-3 card-size-web card-mob zoom shadow" style="border: none">
                            <div class="row g-0">
                                <div class="col-md-4 card-image">
                                    {{-- @php
                                        $venue_id = Venue::where('id', $key)->first();
                                        $base64 = VenuePhotos::where('venue_id', $venue_id->id)->first();
                                    @endphp
                                    <img src="data:image/png;base64,{{$base64->venue_photo_base64}}"
                                        class="img-fluid mobile-img web-img" alt="..."> --}}
                                    @php
                                        $venue = Venue::where('id', $venues->id)->first();
                                        if ($venue) {
                                            $base64 = VenuePhotos::where('venue_id', $venue->id)->first();
                                            echo '<div class="card-image card-circular">';
                                            echo '<img class="rounded img-fluid" width="200px" style="height: 195px" src="data:image/png;base64,' . $base64->venue_photo_base64 . '">';
                                            echo '</div>';
                                        }
                                    @endphp
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{$venues->venue_name}}</h5>
                                        <p class="card-text mt-2"
                                            style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{$venues->venue_address}}</p>
                                        <div class="d-flex">
                                            @php
                                                $qty = $venue->field_detail()->count();
                                            @endphp
                                            <p class="card-text" style="margin-right: 10px">Lapangan Tersedia: {{$qty}}</p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="card-text mt-2">Harga mulai dari:</p>
                                            @php
                                                $start_price = $venue->field_detail()->min('field_cost_hour');
                                            @endphp
                                            <p class="card-text" style="margin-top: -15px">Rp <b>{{$start_price}}</b><small
                                                    class="text-muted"> /
                                                    Jam</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @if($loop->index == 1)
                @break
            @endif
        @endforeach
    </div>
    <div class="text-center mt-3">
        <h6 style="color: #FCE700">Klik tombol di bawah untuk melihat penawaran lainnya</h6>
        <a href="{{ route('lapangan-index') }}">
            <button type="button" class="btn-green-transition mt-2">Lihat Lapangan Lainnya</button>
        </a>
    </div>
</div>
<br>
