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
                        <!-- Form -->
                        <form action="{{ route('forgotpass-insert') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Email
                                    <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Enter email" name="email"
                                    value="{{ old('email') }}" required />
                                @error('email')
                                    <span class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                {{-- <a href="{{ route('front.login') }}" class="" style="text-decoration: none">Kembali ke Login</a> --}}
                            </div>

                            <div class="row justify-content-between">
                                @if (Session::has('error'))
                                    <span class="text-danger">{{ Session::get('error') }}</span>
                                @elseif(Session::has('success'))
                                    <span class="text-success">{{ Session::get('success') }}</span>
                                @else
                                    <span></span>
                                @endif
                                <p>Kembali ke halaman <a href="{{ route('auth.view') }}">Login</a>.</p>
                            <div class="text-center">
                                <button type="" id="" name="" class="btn-green-hover">Kirim</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
