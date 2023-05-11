<style>
    @media screen and (max-width: 765px) {
        .mobile-img {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-mob {
            margin-bottom: 10px;
        }
    }

    @media screen and (min-width: 766px) {
        .web-img {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            height: 200px;
        }

        .card-size-web {
            max-height: 241px;
        }
    }
</style>
<br>
<br>
<br>
<div class="container mt-5">
    <h1 class="fw-bold" style="color: #439A97">Lapangan Yang Tersedia</h1>
    <div class="row mt-5">
        <div class="col-md-6 card-mob">
            <a href="{{ route('lapangan.detail') }}" class="text-decoration-none text-dark">
                <div class="card mb-3 shadow card-size-web" style="border-radius: 12px; border: none;">
                    <div class="row g-0">
                        <div class="col-md-4 card-image">
                            <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}"
                                class="img-fluid mobile-img web-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Lapangan Sepak Bola Senayan</h5>
                                <p class="card-text mt-3"
                                    style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Jl. Setia
                                    Budi
                                    Barat No.1, Kuningan, Setia Budi</p>
                                <p class="card-text mt-3"
                                    style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Lapangan
                                    Tersedia: 3</p>
                                <p class="card-text mt-3">Harga</p>
                                <p class="card-text" style="margin-top: -15px">Rp <b>250.000</b><small
                                        class="text-muted"> /
                                        Jam</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <div class="card mb-3 shadow card-size-web card-mob" style="border-radius: 12px; border: none;">
                <div class="row g-0">
                    <div class="col-md-4 card-image">
                        <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}"
                            class="img-fluid mobile-img web-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Lapangan Sepak Bola Senayan</h5>
                            <p class="card-text text-truncate mt-3" style="max">Jl. Setia Budi
                                Barat No.1, Kuningan, Setia Budi Jl. Setia Budi
                                Barat No.1, Kuningan, Setia Budi Jl. Setia Budi
                                Barat No.1, Kuningan, Setia Budi</p>
                                <p class="card-text mt-3"
                                    style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Lapangan
                                    Tersedia: 3</p>
                            <p class="card-text mt-3">Harga</p>
                            <p class="card-text" style="margin-top: -15px">Rp <b>250.000</b><small class="text-muted"> /
                                    Jam</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        <h6 style="color: #FCE700">Klik tombol di bawah untuk melihat penawaran lainnya</h6>
        <a href="{{ route('lapangan.index') }}">
            <button type="button" class="btn-green-transition mt-2">Lihat Lapangan Lainnya</button>
        </a>
    </div>
</div>
<br>
