@extends('layout.index')

@section('content')
    <div class="container">
        <div class="mt-3">
            @include('session-flash')
        </div>
        <div class="row m-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card shadow" style="border: none; border-radius: 12px;">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('Assets/logo/logo-tanpa-bg.png') }}" class="img-fluid" width="250px" alt="">
                        </div>
                        <p class="h3 fw-bold text-center">Lupa Password?</p>
                        <p class="fs-6 text-center">isi form di bawah utuk memperbarui password anda!</p>
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Pastikan email yang anda isi sesuai dengan email akun anda!</div>
                        </div>
                        <p>Kembali ke halaman <a href="{{ route('auth.login') }}">Login</a>.</p>
                        <div class="text-center">
                            <button type="" id="" name="" class="btn-green-hover">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
