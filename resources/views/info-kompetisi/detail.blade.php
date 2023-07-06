@extends('layout.index')
@php
    use Carbon\Carbon;
    use App\Models\TournamentPhotos;
@endphp
@section('content')
<div class="container">

    <div> 
        <h2 class="fw-bold mt-2"  style="color: #439A97">{{$tournament->tournament_name}}</h3>
        <p class="card-text" style="margin-top:-5px" style="color: #439A97" >Kompetisi Futsal</p>
    </div> 
    <div class="row mt-3">
    <div class="col-md-5">
        @php
            $photo = TournamentPhotos::where('tournament_id', $tournament->id)->first();
        @endphp
        <img src="data:image/png;base64,{{$photo->tournament_photo_base64}}" class="img-fluid"
            style="max-height: 500px; border-radius: 12px" alt="...">
    </div>
    <div class="col-md-7">
        <div class="card shadow" style="border: none; border-radius: 12px; max-height: 500px;">
            <div class="card-body">
                <h4 style="color: #439A97"><u>Deskripsi</u></h4>
                <p class="card-text mt-3">{{$tournament->tournament_detail}}</p>

                <h4 style="color: #439A97"><u>Lokasi</u></h4>
                <p class="card-text mt-3">{{$tournament->tournament_address}}</p>
            </div>
        </div>
    </div>
</div>

<div class="card shadow my-4" style="border: none; border-radius: 12px;">
    <div class="card-body">

        <div class="row mt-4">
            <div class="col-md-4 px-3 text-center border-end">
                <h4 style="color: #439A97"><u>Biaya Pendaftaran</u></h4>
                <p class="fs-5 mt-2">Rp {{$tournament->entry_fee}}</p>

            </div>
            <div class="col-md-4 px-3 text-center border-end">
                <h4 style="color: #439A97"><u>Tanggal Pendaftaran</u></h4>
                <p class="fs-5">{{ \Carbon\Carbon::parse($tournament->registration_start)->locale('id')->isoFormat('D MMMM Y') }}</p>
                <p class="fs-5" style="margin-top: -15px">sampai</p>
                <p class="fs-5" style="margin-top: -15px">{{ \Carbon\Carbon::parse($tournament->registration_end)->locale('id')->isoFormat('D MMMM Y') }}</p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: #439A97"><u>Tanggal Kompetisi Dimulai</u></h4>
                <p class="fs-5">{{ \Carbon\Carbon::parse($tournament->start_date)->locale('id')->isoFormat('D MMMM Y') }}</p>
                <p class="fs-5" style="margin-top: -15px">sampai</p>
                <p class="fs-5" style="margin-top: -15px">{{ \Carbon\Carbon::parse($tournament->end_date)->locale('id')->isoFormat('D MMMM Y') }}</p>
            </div>
        </div>
        <div class="border opacity-50 my-5"></div>
        <div class="row mt-4">
            <div class="col-md-4 px-3 text-center border-end">
                <h4 style="color: #439A97"><u>Kategori Kompetisi</u></h4>
                <p class="fs-5">
                    @if ($tournament->age_category == null)
                        {{$tournament->education_category}}
                    @elseif ($tournament->education_category == null)
                        {{$tournament->age_category}}
                    @endif
                </p>
            </div>
            <div class="col-md-4 text-center border-end">
                <h4 style="color: #439A97"><u>Jumlah Tim Berpartisipasi</u></h4>
                <p class="fs-5" > {{$tournament->team_pool}} Tim </p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: #439A97"><u>Contact Person</u></h4>
                <p class="fs-5" >{{$tournament->contact_person}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
