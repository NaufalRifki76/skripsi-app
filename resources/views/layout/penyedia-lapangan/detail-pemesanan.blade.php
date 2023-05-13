@extends('layout.penyedia-lapangan.layout')

@section('mitra')
    <style>
        .background-img-riwayat {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Assets/riwayat-pemesanan/bg.jpg");
        }
    </style>
    @include('layout.penyedia-lapangan.modal')
    <div class="mb-5">
        <div class="row">
            <div class="col-2 text-center mt-5">
                <a href="{{ route('mitra.index') }}">
                    <button class="btn-green-hover" style="border-radius: 24px"><i class="fa-solid fa-arrow-left fa-xl"></i></button>
                </a>
            </div>
            <div class="col-8 text-center py-4"
                style="background-color: #439a97; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px">
                <h1 style="color: white">Halaman Detail Pemesanan</h1>
                <h5 class="mt-3" style="color: #FCE700">Lihat detail pemesanan "naufal Rifki" di bawah!</h5>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Nama Pemesan</label>
                                <input type="text" disabled class="form-control bg-white" id=""
                                    placeholder="Naufal Rifki">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="text-white h5">Status</label><br>
                                <h5><span class="badge bg-warning text-white">Pending</span></h5>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="text-white h5">Bukti Transfer</label><br>
                                <button class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">No Telepon Pemesan</label>
                                <input type="text" disabled class="form-control bg-white" id=""
                                    placeholder="02165996566">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Email Pemesan</label>
                                <input type="text" disabled class="form-control bg-white" id=""
                                    placeholder="testing2gmail.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Lapangan</label>
                                <input type="text" disabled class="form-control bg-white" id="" placeholder="A">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Tanggal Pemesanan Lapangan</label>
                                <input disabled type="date" class="form-control bg-white" id="" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                <select disabled id="inputJam" class="form-select bg-white mb-3">
                                    <option selected value="1">09.00 - 10.00</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Total Biaya</label>
                                <input type="text" disabled class="form-control bg-white" id=""
                                    placeholder="Rp. 155000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
