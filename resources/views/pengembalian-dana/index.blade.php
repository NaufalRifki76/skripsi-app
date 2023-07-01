@extends('layout.index')

@section('content')
    <style>
        .background-img-riwayat {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("{{ asset('Assets/riwayat-pemesanan/bg.jpg') }}");
        }
    </style>

    <div class="container">
        <div class="py-5">
            <div class="mb-3">
                @include('session-flash')
            </div>
            <p class="h1 fw-bold text-center" style="color: #439A97">Formulir Pengembalian Dana</p>
            <p class="h5 fw-normal text-center" style="color: #FCE700">Isi formulir di bawah jika status pemesanan anda ditolak!</p>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <form action="" method="POST" action="">
                            <div class="row mb-4">
                                <h4 class="fw-bold" style="color: #fff"> Data Diri Pemesan</h4>
                                <div class="col-md-12 mb-3">
                                    <label for="inputState" class="form-label text-white h5">Nama Pemesan</label>
                                    <input type="text" class="form-control bg-white" id="name" name="name" value="{{$user->name}}"
                                        placeholder="Nama Pemesan...">
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">No Telepon</label>
                                        <input type="text" class="form-control bg-white" id="no_telephone" name="no_telephone" value="{{$user->no_telephone}}"
                                            placeholder="No. Telepon Pemesan...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">Email</label>
                                        <input type="text" class="form-control bg-white" id="email" name="email" value="{{$user->email}}"
                                            placeholder="Email Pemesan...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">Nama Bank <span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id="bank" name="bank"
                                            placeholder="Bank yang Digunakan Pemesan...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">No Rekening Anda <span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id="bank_acc_no" name="bank_acc_no"
                                            placeholder="No. Rekening Pemesan...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">Atas Nama Rekening <span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id="bank_acc_name" name="bank_acc_name"
                                            placeholder="Nama Rekening Pemesan...">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <h4 class="fw-bold" style="color: #fff">Lapangan Yang Dipesan</h4>
                                <div class="col-md-6">
                                    <label for="nama-tempat" class="form-label text-white h5">Nama Venue <span
                                        class="text-danger">*</span></label>
                                    <select id="venue_name" name="venue_name" required class="form-select bg-white">
                                        <option selected disabled>Pilih tempat  melakukan pemesanan...</option>
                                        @foreach ($venue as $key => $venues)
                                            <option value="{{$venues->id}}">{{$venues->venue_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nama-lapangan" class="form-label text-white h5">Lapangan Yang Di Pilih <span
                                            class="text-danger">*</span></label>
                                        <select id="field_name" name="field_name" required class="form-select bg-white">
                                            <option selected disabled>Pilih lapangan...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Pilih tanggal pemesanan lapangan <span
                                        class="text-danger">*</span></label>
                                    <input type="date" class="form-control bg-white" required id="order_date" name="order_date" placeholder="">
                                </div>
                                <div class="row fieldGroup mb-3">
                                    <div class="col-md-6">
                                        <label for="inputJam" class="form-label text-white h5">Pilih Jam Bermain <span
                                            class="text-danger">*</span></label>
                                        <select id="up[]" name="up[]" required class="form-select bg-white">
                                            <option selected>Pilih jam anda bermain...</option>
                                            <option value="0">00.00 - 01.00</option>
                                            <option value="1">01.00 - 02.00</option>
                                            <option value="2">02.00 - 03.00</option>
                                            <option value="3">03.00 - 04.00</option>
                                            <option value="4">04.00 - 05.00</option>
                                            <option value="5">05.00 - 06.00</option>
                                            <option value="6">06.00 - 07.00</option>
                                            <option value="7">07.00 - 08.00</option>
                                            <option value="8">08.00 - 09.00</option>
                                            <option value="9">09.00 - 10.00</option>
                                            <option value="10">10.00 - 11.00</option>
                                            <option value="11">11.00 - 12.00</option>
                                            <option value="12">12.00 - 13.00</option>
                                            <option value="13">13.00 - 14.00</option>
                                            <option value="14">14.00 - 15.00</option>
                                            <option value="15">15.00 - 16.00</option>
                                            <option value="16">16.00 - 17.00</option>
                                            <option value="17">17.00 - 18.00</option>
                                            <option value="18">18.00 - 19.00</option>
                                            <option value="19">19.00 - 20.00</option>
                                            <option value="20">20.00 - 21.00</option>
                                            <option value="21">21.00 - 22.00</option>
                                            <option value="22">22.00 - 23.00</option>
                                            <option value="23">23.00 - 00.00</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                        <input type="text" disabled class="form-control bg-white" id="field_cost_hour" name="field_cost_hour">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn-green2-hover addMore" id="addBtn" style="margin-top: 30px;"><i
                                        class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="row fieldGroupCopy mb-3" style="display: none;">
                                    <div class="col-md-6">
                                        <label for="inputJam" class="form-label h5 text-white">Pilih Jam Bermain <span
                                                class="text-danger">*</span></label>
                                        <select id="up[]" name="up[]" class="form-select" required>
                                            <option selected>Pilih jam anda bermain...</option>
                                            <option value="0">00.00 - 01.00</option>
                                            <option value="1">01.00 - 02.00</option>
                                            <option value="2">02.00 - 03.00</option>
                                            <option value="3">03.00 - 04.00</option>
                                            <option value="4">04.00 - 05.00</option>
                                            <option value="5">05.00 - 06.00</option>
                                            <option value="6">06.00 - 07.00</option>
                                            <option value="7">07.00 - 08.00</option>
                                            <option value="8">08.00 - 09.00</option>
                                            <option value="9">09.00 - 10.00</option>
                                            <option value="10">10.00 - 11.00</option>
                                            <option value="11">11.00 - 12.00</option>
                                            <option value="12">12.00 - 13.00</option>
                                            <option value="13">13.00 - 14.00</option>
                                            <option value="14">14.00 - 15.00</option>
                                            <option value="15">15.00 - 16.00</option>
                                            <option value="16">16.00 - 17.00</option>
                                            <option value="17">17.00 - 18.00</option>
                                            <option value="18">18.00 - 19.00</option>
                                            <option value="19">19.00 - 20.00</option>
                                            <option value="20">20.00 - 21.00</option>
                                            <option value="21">21.00 - 22.00</option>
                                            <option value="22">22.00 - 23.00</option>
                                            <option value="23">23.00 - 00.00</option>
                                        </select>
                                    </div>
                                    {{-- <div class="col-md-5">
                                        <label for="inputState" class="form-label h5 text-white">Harga Sewa</label>
                                        <input type="text" disabled class="form-control bg-white" id="field_cost_hour" name="field_cost_hour">
                                    </div> --}}
                                    <div class="col-md-1">
                                        <button type="button" onclick="decrease()" id="delBtn" class="btn-red-hover remove" style="margin-top: 30px;"><i
                                        class="fa-solid fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label text-white h5">Biaya Pemesanan</label>
                                    <input type="text" disabled class="form-control bg-white" id="price">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label text-white h5">Total Biaya Yang Harus Dibayar</label>
                                    <input type="text" disabled class="form-control bg-white" id="price_sum" name="price_sum">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <h4 class="fw-bold" style="color: #fff">Bukti Transfer</h4>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Upload Bukti Pembayaran Anda <span
                                        class="text-danger">*</span></label>
                                    <input type="file" accept=".jpg,.jpeg,.png" class="form-control bg-white" required id="transfer_confirm_base64" name="transfer_confirm_base64"
                                    placeholder="">
                                </div>
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <button type="submit" class="btn-green2-hover text-decoration-none">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @push('css')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    @endpush

    @push('script')
        {{-- Sweet Alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                //melakukan proses multiple input 
                $("form .kirim").click(function(e) {
                    let $form = $(this).closest('form');
                    Swal.fire({
                        title: 'Apakah formulir yang anda isi sudah lengkap dan benar?',
                        text: "Pastikan anda telah mengisi semua formulir yang diminta dengan benar!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#62B6B7',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Kirim Formulir',
                        cancelButtonText: 'Kembali',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $form.submit();
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: 'Batal mengirim formulir!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
                });
            });
        </script>

        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#venue_name').change(function() {
                    var venueid = $(this).val();
        
                    // Disable dependent dropdown until options are fetched
                    $('#field_name').attr('disabled', true);
        
                    // Clear dependent dropdown options
                    $('#field_name').empty();
                    $('#field_name').append('<option value="">Memuat...</option>');
        
                    $.ajax({
                        url: '{{ route("refund-get-field", ["id" => ":id"]) }}/'.replace(':id', venueid),
                        type: 'GET',
                        success: function(response) {
                            // Enable dependent dropdown
                            $('#field_name').attr('disabled', false);
                            $('#field_name').empty();
                            $('#field_name').append('<option value="">Pilih lapangan...</option>');
                            $.each(response, function(key, value) {
                                $('#field_name').append('<option value="' + value.id + '">' + value.field_name + '</option>');
                            });
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#field_name').change(function() {
                    var priceid = $(this).val();
                    if (priceid){
                        $.ajax({
                            url: '{{ route("refund-get-price", ["id" => ":id"]) }}/'.replace(':id', priceid),
                            type: 'GET',
                            success: function(data) {
                                $('#field_cost_hour').val(data.field_cost_hour);
                                $('#price').val(data.field_cost_hour);
                                $('#price_sum').val(data.field_cost_hour + 5000);
                            },
                        });
                    } else {
                        $('#field_cost_hour').val('');
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                let input = document.querySelector("#addBtn")
                input.addEventListener("click", function() {
                    var price = parseInt(document.getElementById('price').value);
                    var cost = parseInt(document.getElementById('field_cost_hour').value);
                    $('#price').val(price + cost);
                    $('#price_sum').val(price + cost + 5000);
                });
            });
        </script>

        <script>
            function decrease(){
                var price = parseInt(document.getElementById('price').value);
                var cost = parseInt(document.getElementById('field_cost_hour').value);
                $('#price').val(price - cost);
                $('#price_sum').val(price - cost + 5000);
            }
        </script>

        <script>
            // select
            $(document).ready(function() {
                $('#nama-tempat').select2({
                    theme: "bootstrap-5",
                });
            });

            $(document).ready(function() {
                $('#nama-lapangan').select2({
                    theme: "bootstrap-5",
                });
            });

            // script untuk Data Lapangan Tersedia
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

            // Script untuk data perlengkapan
            $(document).ready(function() {
                // membatasi jumlah inputan
                var maxGroup2 = 10;

                //melakukan proses multiple input 
                $(".addMore2").click(function() {
                    if ($('body').find('.fieldGroup2').length < maxGroup2) {
                        var fieldHTML = '<div class="row fieldGroup2">' + $(".fieldGroupCopy2").html() +
                            '</div>';
                        $('body').find('.fieldGroup2:last').after(fieldHTML);
                    } else {
                        alert('Maximum ' + maxGroup2 + ' groups are allowed.');
                    }
                });

                //remove fields group
                $("body").on("click", ".remove2", function() {
                    $(this).parents(".fieldGroup2").remove();
                });
            });
            // Cek box perlengkapan
            $(document).ready(function() {
                $('.showthis-upload').hide();

                //show it when the checkbox is clicked
                $('#perlengkapan').on('click', function() {
                    if ($(this).prop('checked')) {
                        $('.showthis-upload').fadeIn();
                    } else {
                        $('.showthis-upload').hide();
                    }
                });
            });
        </script>
    @endpush

@endsection