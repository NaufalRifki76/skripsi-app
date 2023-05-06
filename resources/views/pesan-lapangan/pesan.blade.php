@extends('layout.index')

@section('content')
    <div class="container">
        <p class="h3 fw-bold text-center py-5" style="color: #439A97">Halaman Pemesanan Lapangan</p>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <form action="">
                            <p class="h5 mb-3">Nama Lapangan: <b>Stadion Madya Gelora Bung Karno</b></p>
                            <p class="h5 mb-3">Lapangan: <b>A</b></p>
                            <div class="mb-3">
                                <label for="inputState" class="form-label h5">Pilih tanggal pemesanan lapangan</label>
                                <input type="date" class="form-control" id="ExpiredDate" placeholder="">
                            </div>
                            <div class="row fieldGroup mb-3">
                                <div class="col-md-6">
                                    <label for="inputJam" class="form-label h5">Pilih Jam</label>
                                    <select id="inputJam" class="form-select">
                                        <option selected>Pilih jam anda bermain...</option>
                                        <option disabled value="1">09.00 - 10.00</option>
                                        <option value="2">10.00 - 11.00</option>
                                        <option value="3">11.00 - 12.00</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputState" class="form-label h5">Harga Sewa</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn-green-hover addMore" style="margin-top: 30px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="row fieldGroupCopy mb-3" style="display: none;">
                                <div class="col-md-6">
                                    <label for="inputJam" class="form-label h5">Pilih Jam</label>
                                    <select id="inputJam" class="form-select">
                                        <option selected>Pilih jam anda bermain...</option>
                                        <option disabled value="1">09.00 - 10.00</option>
                                        <option value="2">10.00 - 11.00</option>
                                        <option value="3">11.00 - 12.00</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputState" class="form-label h5">Harga Sewa</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="">
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn-red-hover remove" style="margin-top: 30px;"><i class="fa-solid fa-trash"></i></button>
                                </div>
                        </form>
                        </div>
                        <div class="text-center mt-4 mb-3">
                            <a href="{{ route('lapangan.pesan.konfirmasi') }}" class="btn-green-hover text-decoration-none">Lanjutkan Pemesanan</a>
                        </div>
                    </div>
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
    @endpush
@endsection
