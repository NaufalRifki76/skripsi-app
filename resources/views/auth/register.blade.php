@extends('layout.index')

<style>
    @media screen and (max-width: 765px) {
        .img-register {
            display: none;
        }
    }

    @media screen and (min-width: 766px) {
        .img-register {
            height: 600px;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
    }
</style>
@section('content')
@include('session-flash')
<body style="background-color: #CBEDD5">
    <div class="mt-4 mb-4">
        <div class="container">
            <div class="container">
                <div class="card shadow" style="border-radius: 8px; border: none;">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="https://i.pinimg.com/474x/f3/50/75/f350753b65cb5de1b2e203913b81a609.jpg" alt="Login image"
                                class="w-100 img-register">
                        </div>
                        <div class="col-md-7">
                            <div class="text-center mt-3">
                                <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid me-4" width="300px" alt="logo">
                            </div>
                            <div class="text-center mx-5">
                                <form style="width: 100%;" action="{{route('register-new')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="d-flex justify-content-center">
                                        <h3 class="fw-bold" style=" color: #439A97">Register</h3>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input style="border-radius: 5px" type="text" class="form-control" required id="name" name="name"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Nama Lengkap (sesuai di KTP)</label>
                                    </div>
                                    <div class="form-floating mb-3"> 
                                        <input style="border-radius: 5px" type="email" class="form-control" required id="email" name="email"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input style="border-radius: 5px" type="number" class="form-control" required id="no_telephone" name="no_telephone"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">No. Handphone</label>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <div class="col-md-6">
                                            <div style="border-radius: 5px" class="form-floating mb-3">
                                                <input type="password" class="form-control" required id="password" name="password"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 ">
                                                <input style="border-radius: 5px" type="password" class="form-control" required id="password_confirmation" name="password_confirmation"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Konfirmasi Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-center pt-1 mb-2">
                                            <button type="submit" class="btn-green-hover">Register</button>
                                        </div>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="/login" class="link-info" style=" color: #439A97">Sudah Punya Akun?</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
