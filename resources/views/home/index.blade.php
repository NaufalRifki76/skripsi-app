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
    @include('home.kompetisi-home.index')

    {{-- Pinjam Alat --}}
    @include('home.pinjam-home.index')

    {{-- footer --}}
    @include('layout.footer')

@endsection
