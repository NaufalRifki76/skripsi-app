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
                        <form action="{{ route('forgot-pass-mail', $token) }}" method="POST" novalidate>
                         @csrf
                        <div  class="mb-3">
                            <label for="" class="form-label">Password Baru</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                            <p style="color: red; font-size: 13px; font-style: italic; font-weight: lighter">*Password minimal mempunyai 8 karakter, 1 huruf besar, 1 huruf kecil, dan 1 angka</p>
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Konfirmasi Password Baru</label>
                            <input required type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" />
                        </div>
                        <div class="text-center">
                            <button type="submit" id="" name="" class="btn-green-hover">Kirim</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
