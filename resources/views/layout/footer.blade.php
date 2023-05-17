<div class="container">
    <footer class="py-5 my-5 border-top" style="border-color: #439A97">
        <div class="row mt-5">

            <div class="col-md-4 mb-3 text-center">
                <a href="/" class="align-items-center mb-3 link-dark text-decoration-none">
                    <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="250px"
                        style="margin-top: -30px" alt="logo">
                </a>
                <h2 style="color: #62B6B7; margin-left: 20px">PT Main Bola FNF</h2>
                <p style="margin-left: 20px" class="text-muted ml-4">&copy; 2023</p>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <h5 style="color: #62B6B7">Daftar Halaman</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('auth.dashboard') }}" class="btn-grey-hover text-decoration-none">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('lapangan.index') }}" class="btn-grey-hover text-decoration-none">Booking Lapangan</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('sewa-perlengkapan.index') }}" class="btn-grey-hover text-decoration-none">Info Sewa perlengkapan</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('kompetisi.index') }}" class="btn-grey-hover text-decoration-none">Info Kompetisi</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <h5 style="color: #62B6B7">Hubungi Kami</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('mitra.index') }}" class="btn-grey-hover text-decoration-none">Bergabung Menjadi Mitra Kami</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('daftar.kompetisi') }}" class="btn-grey-hover text-decoration-none">Publikasikan Kompetisi Anda</a></li>
                    <li class="nav-item mb-2"><a href="#" class="btn-grey-hover text-decoration-none">Formulir Pengembalian Dana</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('faq.index') }}" class="btn-grey-hover text-decoration-none">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="btn-grey-hover text-decoration-none">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>