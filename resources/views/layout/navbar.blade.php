<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="120px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto" style="margin-top: -2px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Booking Lapangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info Kompetisi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/subscribe">Berlangganan</a>
                </li>
            </ul>
            <div class="">
                <a href="{{ route('auth.login') }}">
                    <button type="button" class="btn" style="background-color: #62B6B7; color: white">Login</button>
                </a>
            </div>
        </div>
    </div>
</nav>
