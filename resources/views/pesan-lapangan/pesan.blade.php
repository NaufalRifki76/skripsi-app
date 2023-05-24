@extends('layout.index')

@section('content')
    <div class="container">
        <div class="py-5">
            <p class="h3 fw-bold text-center" style="color: #439A97">Halaman Pemesanan Lapangan</p>
            <p class="h5 fw-normal text-center" style="color: #d14c05">Pilih tanggal bermain dengan mengisi formulir di bawah!
            </p>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow background-img-pemesanan" style="border: none; border-radius: 12px">
                    <form action="{{ route('lapangan-order-time', ['venueid' => $venueid, 'fieldid' => $fieldid]) }}"
                        method="POST">
                        @csrf
                        <div class="card-body">
                            <p class="h5 mb-3 text-white">Nama Lapangan: <b>{{ $venue->venue_name }}</b></p>
                            <p class="h5 mb-3 text-white">Lapangan: <b>{{ $field->field_name }}</b></p>
                            <div class="mb-3">
                                <label for="inputState" class="form-label h5 text-white">Pilih tanggal pemesanan lapangan
                                    <span class="text-danger">*</span></label>
                                <input type="date" class="form-control inputdate" required id="order_date"
                                    name="order_date" placeholder="">
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <button type="submit" class="btn-green-hover text-decoration-none"> Lanjutkan
                                    Pemesanan</button>
                                {{-- <a href="{{ route('lapangan.pesan.jam') }}">
                                    <button type="button" class="btn-green-hover text-decoration-none"> Lanjutkan
                                        Pemesanan test</button>
                                </a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    @push('css')
        <style>
            .background-img-pemesanan {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('Assets/background/bg-pesan.jpg') }}");
            }
        </style>
    @endpush
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
