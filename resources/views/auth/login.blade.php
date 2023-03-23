@extends('layout.index')

<style>
    @media screen and (max-width: 765px) {
        .img-login {
            display: none;
        }
    }

    @media screen and (min-width: 766px) {
        .img-login {
            height: 600px;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
    }
</style>

@section('content')
<body style="background-color: #CBEDD5">
    <div class="mt-4 mb-4">
        <div class="container">
            <div class="container">
                <div class="card shadow" style="border-radius: 8px; border: none;">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="https://i.pinimg.com/474x/f3/50/75/f350753b65cb5de1b2e203913b81a609.jpg"
                                alt="Login image" class="w-100 img-login">
                        </div>
                        <div class="col-md-7">
                            <div class="text-center mt-3 mb-4">
                                <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid me-4" width="300px"
                                    alt="logo">
                            </div>
                            <div class="text-center mx-5">
                                <form style="width: 100%;" action="{{route('auth.login')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="d-flex justify-content-center">
                                        <h3 class="fw-bold px-2" style=" color: #439A97">Login</h3>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="name@example.com">
                                        <label for="floatingInput input-label-sm">Email</label>
                                    </div>
                                    <div class="form-group form-floating mb-3">
                                        <input type="password" class="form-control form-control-sm" name="password"
                                            placeholder=".form-control-sm" id="password">
                                        <label for="floatingInput">Password</label>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-center pt-1 mb-3">
                                            <button type="submit" class="btn-green-hover">Login</button>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <p class="small mb-3"><a class="text-muted" href="#!">Lupa Sandi?</a></p>
                                        </div>
                                        <div class="d-flex justify-content-center mb-5">
                                            <a href="{{route('register-user')}}" class="link-info" style=" color: #439A97">Belum Punya
                                                Akun?</a></p>
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
