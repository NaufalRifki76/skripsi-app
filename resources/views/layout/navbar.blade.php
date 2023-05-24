<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('auth.dashboard') }}">
            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="120px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto" style="margin-top: -2px">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('auth.dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('lapangan-index')}}">Booking Lapangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Info Sewa Perlengkapan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('kompetisi.index')}}">Info Kompetisi</a>
                </li>
            </ul>
            @if(Sentinel::getUser())
            <div class="dropdown ms-auto">
                <button class="btn-green-hover" type="button" id="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="">{{ Sentinel::getUser()->name }}</span>
                </button>
                <div class="dropdown-menu text-center" style="border-radius: 5px; margin-left: -0px;" aria-labelledby="">
                    <a class="dropdown-item border-bottom" style="margin-top: -7px;" href="">Profile</a>
                    <a class="dropdown-item border-bottom" href="">Riwayat Pemesanan</a>
                    <a class="dropdown-item" style="margin-bottom: -7px;" href="{{ route('auth.logout') }}">Log Out</a>
                </div>
            </div>
            @else
                <div class="">
                    <a href="{{ route('auth.view') }}">
                        <button type="button" class="btn" style="background-color: #62B6B7; color: white">Login</button>
                    </a>
                </div>
            @endif

        </div>
    </div>
</nav>
