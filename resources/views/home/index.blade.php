@extends('layout.index')

@section('content')
    {{-- carousel home --}}
    @include('home.carousel-home')

    {{-- lapangan yang tersedia --}}
    @include('home.lapangan-home.index')

    {{-- Keuntungan Booking --}}
    @include('home.keuntungan-home.index')

    {{-- Subscribe Home --}}
    @include('home.subscribe-home.index')

    {{-- Booking Lapangan --}}
    <h1>test aja ini ko</h1>
@endsection
