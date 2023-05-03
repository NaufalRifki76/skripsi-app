<style>
    @media screen and (max-width: 765px) {
        .web-subscribe {
        display: none;
       }
    }

    @media screen and (min-width: 766px) {
       .mobile-subscribe {
        display: none;
       }
    }
</style>
<br>
<br>
<br>
<br>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 mobile-subscribe text-center mb-3">
            <img src="{{ asset('Assets/home/kompetisi/competition.png') }}" class="img-fluid" width="75%" alt="img-subscribe">
        </div>
        <div class="col-md-7">
            <div class="text-center">
                <h2 class="fw-bold" style="color: #439A97">Info Kompetisi</h2>
                <h6 class="mt-3" style="color: #FCE700">Cari informasi kompetisi futsal di "Main Bola"!</h6>
                <div class="container mt-5">
                    <p class="fs-6" style="color: #62B6B7">1. Mendapatkan informasi kompetisi futsal yang tersedia untuk didaftar.
                        <br> 2. Memudahkan pengguna untuk mencari kompetisi kelompok umur dan pendidikan. <br> 3.
                        Informasi yang diberikan akurat dan terpercaya.
                    </p>
                </div>
            </div>
            <div class="container mt-5" style="background-color: #ECFAF0; border-radius: 12px">
                <div class="row">
                    <div class="col-7 text-center">
                        <p class="fs-6 mt-2" style="color: #62B6B7"><b>Cari informasi kompetisi futsal dengan menekan tombol di samping!</b></p>
                    </div>
                    <div class="col-5 text-center">
                        <a href="{{ route('kompetisi.index') }}">
                            <button type="button" class="btn-green-hover" style="margin-top: 14px">Cari Kompetisi</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 web-subscribe text-center" style="margin-top: -40px">
            <img src="{{ asset('Assets/home/kompetisi/competition.png') }}" class="img-fluid" width="75%" alt="img-kompetisi">
        </div>
    </div>
</div>
<br>
