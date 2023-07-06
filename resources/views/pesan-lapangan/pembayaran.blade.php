@extends('layout.index')

@section('content')
    <style>
        .background-img-pemesanan {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('Assets/background/bg-pesan.jpg') }}");
        }
    </style>

<form action="{{route('lapangan-transfer-store', ['rentorder_id' => $order_info->id])}}" method="POST" enctype="multipart/form-data">
    <div class="container">
        <p class="h3 fw-bold text-center py-5" style="color: #439A97">Halaman Pembayaran</p>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card background-img-pemesanan shadow mb-5" style="border: none; border-radius: 12px">
                    @csrf
                    <div class="card-body">
                            <div class="row mb-4">
                                <h4 class="fw-bold" style="color: #fff">Jumlah Yang Harus Dibayar</h4>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Total Biaya</label>
                                    <input type="text" disabled class="form-control bg-white" id="" value="Rp. {{$order_info->price_sum}}"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <h4 class="fw-bold" style="color: #fff">Informasi Pembayaran</h4>
                                <p class="fs-6 text-warning">Lakukan pembayaran dengan transfer ke nomor rekeking yang
                                    tersedia
                                    di bawah!</p>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h5 text-white">Nomor Rekening</label>
                                    <input type="text" disabled class="form-control bg-white" id="" value="{{$venue_info->bank_acc_no}}"
                                        placeholder="123456789">
                                </div>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h5 text-white">Atas Nama</label>
                                    <input type="text" disabled class="form-control bg-white" id="" value="{{$venue_info->bank_acc_name}}"
                                        placeholder="Stadion Madya Gelora Bung Karno">
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="fw-bold" style="color: #fff">Bukti Pembayaran</h4>
                                <p class="fs-6 text-warning">Upload bukti transfer anda dengan mengisi formulir di bawah!
                                </p>
                                <p class="fs-6 text-warning">Tipe file yang diterima: jpg, jpeg, png.
                                </p>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Bukti Transfer <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control bg-white" required accept=".jpg, .jpeg, .png"
                                        id="transfer_confirm_base64" name="transfer_confirm_base64" placeholder="Jenis file upload: jpg/jpeg/png">
                                </div>
                            </div>
                            <div class="text-center mt-4 mb-3">
                                <button type="button" class="btn-green-hover text-decoration-none pembayaran">Pesan
                                    Lapangan</button>
                                {{-- <button type="submit" class="btn-green-hover text-decoration-none pembayaran">Pesan
                                    Lapangan</button> --}}
                            </div>
                       
                    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                //melakukan proses multiple input 
                $("form .pembayaran").click(function(e) {
                    let $form = $(this).closest('form');
                    Swal.fire({
                        title: 'Apakah anda yakin ingin melanjutkan pemesanan?',
                        text: "Pastikan anda telah melakukan upload bukti transfer!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#62B6B7',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Lanjutkan Pemesanan!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $form.submit();
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Batal !',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
                });
            });
        </script>
    @endpush
</form>
@endsection
