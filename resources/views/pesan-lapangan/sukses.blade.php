@extends('layout.index')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card shadow" style="border: none; border-radius: 12px">
                <div class="card-body text-center">
                    <h3 class="fw-bold" style="color: #439A97">Pembayaran Berhasil!</h3>
                    <img src="{{ asset('Assets/lapangan/transaction-success.jpg') }}" class="img-fluid my-3" width="50%" alt="">
                    <h6 class="mb-3 mx-3">Anda dapat melihat status pemesanan lapangan yang anda lakukan dengan menekan tombol di bawah!</h6>
                    <div class="mt-4 mb-3">
                        <a href="{{route('riwayat-order')}}" class="btn-green-hover text-decoration-none">Lihat Status Pemesanan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection