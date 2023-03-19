<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @if($validLink)
            <title>Sukses Registrasi</title>
        @else
            <title>Registrasi Gagal!</title>
        @endif
</head>

<body>

    @if ($validLink)
    <div class="container mx-auto mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card border-2 mt-4 shadow" style="border-radius: 10px">
                    <div class="card-body text-center">
                        {{-- <img class="img-fluid" src="{{ asset('assets/images/congratulation_fix.png') }}"
                            style="width: 150px;" alt="congrats"> --}}
                        <h1 class="mt-3 text-success">Aktivasi Sukses!</h1>
                        <h5 class="mt-3">Email anda telah berhasil di daftarkan! <br> Terima kasih telah melakukan
                            registrasi.</h5>
                        <div class="mt-5">
                            <a href="{{ route('auth.login') }}">
                                <h3><button class="btn text-white bg-primary">Login</button></h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    @else
    <div class="container mx-auto mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card border-2 mt-4 shadow" style="border-radius: 10px">
                    <div class="card-body text-center">
                        {{-- <img class="img-fluid" src="{{ asset('assets/images/information.png') }}"
                            style="width: 150px;" alt="congrats"> --}}
                        <h1 class="mt-3 text-danger">Aktivasi Gagal!</h1>
                        {{-- <h5 class="mt-3">{{ Session::get('error') }}</h5> --}}
                        <div class="mt-5">
                            <a href="{{ route('auth.login') }}">
                                <h3><button class="btn text-white bg-primary">Login</button></h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>