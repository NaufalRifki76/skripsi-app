@extends('layout.index')

@section('content')
    <style>
        .background-img-pemesanan {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("Assets/background/bg-pemesanan.jpg");
        }
    </style>
    <div class="container">
        <div class="py-5">
            <p class="h3 fw-bold text-center" style="color: #439A97">Halaman Pemesanan Lapangan</p>
            <p class="h5 fw-normal text-center" style="color: #FCE700">Pilih tanggal bermain dengan mengisi formulir di bawah!</p>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow background-img-pemesanan" style="border: none; border-radius: 12px">
                    <form action="">
                        <div class="card-body">
                            <p class="h5 mb-3 text-white">Nama Lapangan: <b>Stadion Madya Gelora Bung Karno</b></p>
                            <p class="h5 mb-3 text-white">Lapangan: <b>A</b></p>
                            <div class="mb-3">
                                <label for="inputState" class="form-label h5 text-white">Pilih tanggal pemesanan lapangan
                                    <span class="text-danger">*</span></label>
                                <input type="date" class="form-control inputdate" required id="" placeholder="">
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <a href="{{ route('lapangan.pesan.jam') }}">
                                    <button type="button" class="btn-green-hover text-decoration-none"> Lanjutkan
                                        Pemesanan</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    @push('script')
        <script type="text/javascript">
            $(function() {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;
                $('.inputdate').attr('min', maxDate);
            });
        </script>
    @endpush
@endsection
