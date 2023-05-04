@extends('layout.index')
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
            height: 240px;
        }

        .card-web {
            margin-bottom: 30px;
        }

        .zoom {
            transition: transform .2s;
            /* Animation */
        }

        .zoom:hover {
            transform: scale(1.05);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .card-size-web {
            max-height: 300px;
        }
    }
</style>
@section('content')
    <div style="background-color: #ECFAF0">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 text-center py-4"
                    style="background-color: #439a97; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px">
                    <h1 style="color: white">Daftar Lapangan</h1>
                    <h5 style="color: #FCE700">Temukan lapangan yang anda ingin pesan di sini !</h5>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row py-5 mx-5">
                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nama-lapangan"
                            placeholder="Nama Lapangan Yang Anda Cari ...">
                        <label for="nama-lapangan">Nama Lapangan</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="harga-sewa" placeholder="Nominal Harga Sewa ...">
                        <label for="harga-sewa">Harga Sewa</label>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <button type="submit" id="" name="" class="btn-green-transition mt-2">Cari
                        Lapangan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <a class="text-dark text-decoration-none" href="{{ route('lapangan.detail') }}">
                    <div class="card mb-3 card-size-web card-mob zoom shadow" style="border-radius: 12px; border: none">
                        <div class="row g-0">
                            <div class="col-md-4 card-image">
                                <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}"
                                    class="img-fluid mobile-img web-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Lapangan Sepak Bola Senayan</h5>
                                    <p class="card-text mt-2"
                                        style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Jl. Setia
                                        Budi Barat No.1, Kuningan, Setia Budi, Jakarta Pusat, DKI Jakarta, 10220</p>
                                    <div class="d-flex">
                                        <p class="card-text" style="margin-right: 10px">Lapangan Tersedia:</p>
                                        <p class="card-text">3</p>
                                    </div>
                                    <div class="mt-3">
                                        <p class="card-text mt-2">Harga</p>
                                        <p class="card-text" style="margin-top: -15px">Rp <b>250.000</b><small
                                                class="text-muted"> /
                                                Jam</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-dark text-decoration-none" href="{{ route('lapangan.detail') }}">
                    <div class="card mb-3 card-size-web card-mob zoom shadow" style="border-radius: 12px; border: none">
                        <div class="row g-0">
                            <div class="col-md-4 card-image">
                                <img src="{{ asset('Assets/image-lapangan/lapangan-card.jpg') }}"
                                    class="img-fluid mobile-img web-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Lapangan Sepak Bola Senayan</h5>
                                    <p class="card-text mt-2"
                                        style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Jl. Setia
                                        Budi Barat No.1, Kuningan, Setia Budi, Jakarta Pusat, DKI Jakarta, 10220</p>
                                    <div class="d-flex">
                                        <p class="card-text" style="margin-right: 10px">Lapangan Tersedia:</p>
                                        <p class="card-text">3</p>
                                    </div>
                                    <div class="mt-3">
                                        <p class="card-text mt-2">Harga</p>
                                        <p class="card-text" style="margin-top: -15px">Rp <b>250.000</b><small
                                                class="text-muted"> /
                                                Jam</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
