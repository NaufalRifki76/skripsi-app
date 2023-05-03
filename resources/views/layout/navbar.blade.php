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
                    <a class="nav-link" aria-current="page" href="{{route('lapangan.index')}}">Booking Lapangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('sewa-perlengkapan.index')}}">Info Sewa Perlengkapan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('kompetisi.index')}}">Info Kompetisi</a>
                </li>
            </ul>
            @if(Sentinel::getUser())
                <button class="btn btn-primary text-white" type="button" id="register" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 24px">
                    <span class="">{{ Sentinel::getUser()->name }}</span>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 30px;">
                </button>
            @else
                <div class="">
                    <a href="{{ route('auth.view') }}">
                        <button type="button" class="btn" style="background-color: #62B6B7; color: white">Login</button>
                    </a>
                </div>
            @endif

            <div class="dropdown-menu mx-auto" style="border-radius: 10px;" aria-labelledby="register">
                {{-- <div class="tampilan-web">
                    <a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a>
                </div>
                <div class="tampilan-mobile">
                    <a class="dropdown-item" href="{{ url('/profile-mobile') }}">Profile</a>
                </div> --}}
                    <a class="dropdown-item" href="{{ route('auth.logout') }}">Log Out</a>
            </div>
        </div>
    </div>
</nav>
