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
            <p class="h5 fw-normal text-center" style="color: #FCE700">Pilih jam bermain dengan mengisi formulir di bawah!</p>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow background-img-pemesanan" style="border: none; border-radius: 12px">
                    <form action="">
                        <div class="card-body">
                            <p class="h5 mb-3 text-white">Nama Lapangan: <b>{{$venue->venue_name}}</b></p>
                            <p class="h5 mb-3 text-white">Lapangan: <b>{{$field->field_name}}</b></p>
                            <p class="h5 mb-3 text-white">Hari & Tanggal: <b>{{\Carbon\Carbon::parse($date)->locale('id')->translatedFormat('l, d F Y')}}</b></p>
                            <div class="row fieldGroup mb-3">
                                <div class="col-md-6">
                                    <label for="inputJam" class="form-label h5 text-white">Pilih Jam <span
                                            class="text-danger">*</span></label>
                                    <select id="inputJam" class="form-select" required>
                                        <option disabled selected>Pilih jam anda bermain...</option>
                                        @if ($hours->up00 != null)
                                            @if ($availability->up00 == null)
                                                <option value="0">00.00 - 01.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up01 != null)
                                            @if ($availability->up01 == null)
                                                <option value="1">01.00 - 02.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up02 != null)
                                            @if ($availability->up02 == null)
                                                <option value="2">02.00 - 03.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up03 != null)
                                            @if ($availability->up03 == null)
                                                <option value="3">03.00 - 04.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up04 != null)
                                            @if ($availability->up04 == null)
                                                <option value="4">04.00 - 05.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up05 != null)
                                            @if ($availability->up05 == null)
                                                <option value="5">05.00 - 06.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up06 != null)
                                            @if ($availability->up06 == null)
                                                <option value="6">06.00 - 07.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up07 != null)
                                            @if ($availability->up07 == null)
                                                <option value="7">07.00 - 08.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up08 != null)
                                            @if ($availability->up08 == null)
                                                <option value="8">08.00 - 09.00</option>
                                            @endif
                                        @endif
                                        @if ($hours->up09 != null)
                                            @if ($availability->up09 == null)
                                                <option value="9">09.00 - 10.00</option>
                                            @endif
                                        @endif
                                        
                                        <option value="10">10.00 - 11.00</option>
                                        <option value="11">11.00 - 12.00</option>
                                        <option value="11">12.00 - 13.00</option>
                                        <option value="11">13.00 - 14.00</option>
                                        <option value="11">14.00 - 15.00</option>
                                        <option value="11">15.00 - 16.00</option>
                                        <option value="11">16.00 - 17.00</option>
                                        <option value="11">17.00 - 18.00</option>
                                        <option value="11">18.00 - 19.00</option>
                                        <option value="11">19.00 - 20.00</option>
                                        <option value="11">20.00 - 21.00</option>
                                        <option value="11">21.00 - 22.00</option>
                                        <option value="11">22.00 - 23.00</option>
                                        <option value="11">23.00 - 00.00</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputState" class="form-label h5 text-white">Harga Sewa</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn-green-hover addMore" style="margin-top: 30px;"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="row fieldGroupCopy mb-3" style="display: none;">
                                <div class="col-md-6">
                                    <label for="inputJam" class="form-label h5">Pilih Jam <span
                                            class="text-danger">*</span></label>
                                    <select id="inputJam" class="form-select" required>
                                        <option selected>Pilih jam anda bermain...</option>
                                        <option disabled value="1">09.00 - 10.00</option>
                                        <option value="2">10.00 - 11.00</option>
                                        <option value="3">11.00 - 12.00</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputState" class="form-label h5 text-white">Harga Sewa</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn-red-hover remove" style="margin-top: 30px;"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <a href="{{ route('lapangan.pesan.konfirmasi') }}">
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

    @push('css')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    @endpush

    @push('script')
        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#inputJam').select2({
                    theme: "bootstrap-5",
                });
            });

            $(document).ready(function() {
                // membatasi jumlah inputan
                var maxGroup = 10;

                //melakukan proses multiple input 
                $(".addMore").click(function() {
                    if ($('body').find('.fieldGroup').length < maxGroup) {
                        var fieldHTML = '<div class="row fieldGroup">' + $(".fieldGroupCopy").html() +
                            '</div>';
                        $('body').find('.fieldGroup:last').after(fieldHTML);
                    } else {
                        alert('Maximum ' + maxGroup + ' groups are allowed.');
                    }
                });

                //remove fields group
                $("body").on("click", ".remove", function() {
                    $(this).parents(".fieldGroup").remove();
                });
            });
        </script>
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
