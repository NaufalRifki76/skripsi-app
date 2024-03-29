<nav class="navbar shadow navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('mitra.home') }}">
            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="120px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarMitra">
            @if(Sentinel::getUser())
            <div class="dropdown ms-auto">
                <button class="btn-green-hover" type="button" id="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="">{{ Sentinel::getUser()->name }}</span>
                </button>
                <div class="dropdown-menu text-center" style="border-radius: 5px; margin-left: -0px;" aria-labelledby="">
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
