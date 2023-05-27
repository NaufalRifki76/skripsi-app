@extends('layout.penyedia-lapangan.layout')

@section('mitra')
@include('layout.penyedia-lapangan.modal')
    <div class="card mt-3 d-flex shadow p-3 m-5" style="border: none;">
        <div class="text-center">
            <h2 class="my-5 fw-bold" style="color: #439a97">Berikan Alasan Untuk Penolakan Pemesanan!</h2>
        </div>
        <div class="row g-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label h5">Nama Pemesan</label>
                                        <input type="text" disabled class="form-control bg-white" id=""
                                            placeholder="Naufal Rifki">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="h5">Status</label><br>
                                        <h5><span class="badge bg-warning">Pending</span></h5>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="h5">Bukti Transfer</label><br>
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label h5">No Telepon Pemesan</label>
                                        <input type="text" disabled class="form-control bg-white" id=""
                                            placeholder="02165996566">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label h5">Email Pemesan</label>
                                        <input type="text" disabled class="form-control bg-white" id=""
                                            placeholder="testing2gmail.com">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label h5">Lapangan</label>
                                        <input type="text" disabled class="form-control bg-white" id=""
                                            placeholder="A">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label h5">Tanggal Pemesanan Lapangan</label>
                                        <input disabled type="date" class="form-control bg-white" id=""
                                            placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputJam" class="form-label h5">Jam Bermain</label>
                                        <select disabled id="inputJam" class="form-select bg-white mb-3">
                                            <option selected value="1">09.00 - 10.00</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState" class="form-label h5">Total Biaya</label>
                                        <input type="text" disabled class="form-control bg-white" id=""
                                            placeholder="Rp. 155000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="h5">Alasan Pemesanan Ditolak</label>
                            <textarea class="form-control border-2" style="background-color: #fff" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Tuliskan alasan anda menolak pesanan ini..."></textarea>
                        </div>
                        <div class="text-center mt-4 mb-3 mx-5">
                            <button class="btn-green-hover text-decoration-none">Kirim</button>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>


    @push('css-mitra')
        {{-- Select --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    @endpush

    @push('script-mitra')
        {{-- Select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#inputState').select2({
                    theme: "bootstrap-5",
                });
            });
        </script>
    @endpush
@endsection
