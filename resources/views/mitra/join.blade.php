@extends('layout.index')

@section('content')
    <style>
        .background-img-riwayat {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("Assets/riwayat-pemesanan/bg.jpg");
        }
    </style>

    <div class="container">
        <div class="py-5">
            <p class="h1 fw-bold text-center" style="color: #439A97">Bergabung Menjadi Mitra Kami</p>
            <p class="h5 fw-normal text-center" style="color: #FCE700">Isi formulir di bawah untuk mendaftarkan lapangan yang
                anda miliki!</p>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <form action="">

                            {{-- Data Venue --}}
                            <div class="row">
                                <h3 class="fw-bold text-white mb-3">Informasi Lapangan Yang Anda Daftarkan</h3>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Lapangan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Nama lapangan anda...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label h5 text-white">Alamat <span class="text-danger">*</span></label>
                                        <textarea class="form-control" required placeholder="Alamat lapangan anda..." id="" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Foto Lapangan (.jpg,
                                            .png)</label>
                                        <input type="file" class="form-control bg-white" accept=".jpg, .jpeg, .png"
                                            id="" placeholder="Jumlah lapangan tersedia...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputState" class="form-label h5 text-white">Jam Buka <span class="text-danger">*</span></label>
                                                <input type="time" required class="form-control bg-white" id=""
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputState" class="form-label h5 text-white">Jam Tutup <span class="text-danger">*</span></label>
                                                <input type="time" required class="form-control bg-white" id=""
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label h5 text-white">Deskripsi Lapangan <span class="text-danger">*</span></label>
                                        <textarea class="form-control" required placeholder="Deskripsi lapangan anda..." id="" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Harga Sewa Lapangan
                                            Per-Jam <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="">Rp</span>
                                            <input type="number" class="form-control" required id=""
                                                aria-describedby="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5 text-white">Fasilitas Lapangan (Ceklis
                                        fasilitas yang
                                        tersedia di tempat anda).</label>
                                    <div class="row px-4">
                                        <div class="col-md-4">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="">
                                                <label class="form-check-label text-white" for="">
                                                    Minuman
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="">
                                                <label class="form-check-label text-white" for="">
                                                    Ruang Ganti
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="">
                                                <label class="form-check-label text-white" for="">
                                                    Toilet
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="">
                                                <label class="form-check-label text-white" for="">
                                                    Parkir Kendaraan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="">
                                                <label class="form-check-label text-white" for="">
                                                    Wifi
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="perlengkapan">
                                                <label class="form-check-label text-white" for="">
                                                    Sewa Perlengkapan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Data Lapangan Tersedia --}}
                            <div class="row fieldGroup mb-3">
                                <div class="col-md-10">
                                    <h3 class="fw-bold mb-3 mt-2 text-white">Data Lapangan Tersedia</h3>
                                </div>
                                <div class="col-md-2 text-end">
                                    <button type="button" class="btn-green2-hover addMore shadow-lg"
                                        style="margin-top: 10px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Lapangan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Nama lapangan anda...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Foto Lapangan (.jpg,
                                            .png)</label>
                                        <input type="file" class="form-control bg-white" accept=".jpg, .jpeg, .png"
                                            id="" placeholder="Jumlah lapangan tersedia...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Harga Sewa
                                            Per-Jam <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="">Rp</span>
                                            <input type="number" class="form-control" required id=""
                                                aria-describedby="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fieldGroupCopy" style="display: none;">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Lapangan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Nama lapangan anda...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Foto Lapangan (.jpg,
                                            .png)</label>
                                        <input type="file" class="form-control bg-white" accept=".jpg, .jpeg, .png"
                                            id="" placeholder="Jumlah lapangan tersedia...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Harga Sewa
                                            Per-Jam <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="">Rp</span>
                                            <input type="number" class="form-control" required id=""
                                                aria-describedby="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button type="button" class="btn-red-hover remove mt-2"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>

                            {{-- Perlengkapan Tersedia --}}
                            <div class="row fieldGroup2 showthis-upload">
                                <div class="col-md-10">
                                    <h3 class="fw-bold mb-3 mt-2 text-white">Data Perlengkapan Tersedia</h3>
                                </div>
                                <div class="col-md-2 text-end">
                                    <button type="button" class="btn-green2-hover addMore2 shadow-lg"
                                        style="margin-top: 10px;"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Perlengkapan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Nama lapangan anda...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Jumlah <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Jumlah perlengkapan...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Harga Sewa
                                            Per-Jam <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="">Rp</span>
                                            <input type="number" class="form-control" required id=""
                                                aria-describedby="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fieldGroupCopy2" style="display: none;">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Nama Perlengkapan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Nama lapangan anda...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Jumlah <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control bg-white" required id=""
                                            placeholder="Jumlah perlengkapan...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label h5 text-white">Harga Sewa
                                            Per-Jam <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="">Rp</span>
                                            <input type="number" class="form-control" required id=""
                                                aria-describedby="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button type="button" class="btn-red-hover remove2 mt-2"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn-green2-hover mt-4">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    @push('script')
        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
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
