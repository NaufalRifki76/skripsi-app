<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('/css/button-kreasi.css') }}" />

    {{-- style font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Font Awsome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- Animate On Scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


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

    <title>Main Bola</title>
</head>
<style>
    .text-font-fix {
        font-family: 'Lexend Deca', sans-serif;
    }

    .background-img-pemesanan {
            /* filter: brightness(90%); */
        }

    body {
        overflow-x: hidden;
    }
</style>

<body class="text-font-fix" style="background-color: #CBEDD5">

    {{-- navbar --}}
    @include('layout.navbar-auth')

    {{-- main regsiter --}}
    @include('session-flash')
    <div class="mt-4 mb-4">
        <div class="container">
            <div class="container">
                <div class="card shadow" style="border-radius: 8px; border: none;">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('Assets/register.jpg') }}" alt="Login image"
                                class="w-100 img-register background-img-pemesanan" >
                        </div>
                        <div class="col-md-7">
                            <div class="text-center mt-3">
                                <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid me-4" width="250px" alt="logo">
                            </div>
                            <div class="text-center mx-5">
                                <form style="width: 100%;" action="{{route('register-new')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="d-flex justify-content-center">
                                        <h3 class="fw-bold" style=" color: #439A97">Register</h3>
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <input style="border-radius: 5px" type="text" class="form-control" required id="name" name="name"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Nama Lengkap (sesuai di KTP)</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6"> 
                                            <div class="form-floating mb-3 mt-3">
                                                <input style="border-radius: 5px" type="email" class="form-control" required id="email" name="email"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Email</label>
                                            </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mt-3">
                                                <input style="border-radius: 5px" type="number" class="form-control" required id="no_telephone" name="no_telephone"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">No. Handphone</label>
                                            </div>
                                        </div>
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
                                    </div>
                                </form>
                                <div class="d-flex justify-content-center mb-3 mt-4">
                                    <p>Sudah punya akun? Silahkan <a href="{{ route('auth.view') }}" type="button" class="btn-grey-hover">login</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Animate On Scroll JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>



</html>








