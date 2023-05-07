@extends('layout.index')

@section('content')

<style>
    .background-img-riwayat {
    background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("Assets/riwayat-pemesanan/bg.jpg");
}
</style>

<div style="background-color: #ECFAF0">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 text-center py-4"
            style="background-color: #439a97; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px">
            <h1 style="color: white">Riwayat Pemesanan Anda</h1>
            <h5 style="color: #FCE700">Cek status pemesanan lapangan yang telah anda lakukan di sini!</h5>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="row py-4 mx-5">
                <div class="col-md-10 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nama-lapangan"
                            placeholder="Nama Lapangan Yang Anda Cari ...">
                        <label for="nama-lapangan">Nama Lapangan</label>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <button type="submit" id="" name="" class="btn-green-transition mt-2">Cari Lapangan</button>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h5 class="my-5" style="color: #439a97">Harap perlihatkan bukti pemesanan pada pihak penyedia lapangan yang anda pesan!</h5>
            <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="inputState" class="form-label h5">Nama Pemesan</label>
                                <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                    placeholder="Faris Fakim">
                            </div>
                            <div class="mb-3">
                                <label for="inputState" class="form-label h5">Nama Lapangan</label>
                                <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                    placeholder="Stadion Madya Gelora Bung Karno">
                            </div>
                            <div class="mb-3">
                                
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-top: 35px">
                            <div class="card bg-transparent border-white border-3" style="border-radius: 12px;">
                                <div class="card-body text-center">
                                    <h5 class="mb-2">
                                       <b>Status Pemesanan:</b> 
                                       <span class="badge bg-warning shadow">Menunggu</span>
                                       {{-- <span class="badge bg-success shadow">Berhasil</span>
                                       <span class="badge bg-danger shadow">Dibatalkan</span> --}}
                                    </h5>
                                    <p class="fs-6" style="margin-bottom: -5px">  Menunggu di setujui oleh pihak lapangan!</p>
                                    {{-- <p class="fs-6" style="margin-bottom: -5px">  Pesanan anda berhasil!</p>
                                    <p class="fs-6" style="margin-bottom: -5px">  Pesanan anda dibatalkan!</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputState" class="form-label h5">Lapangan</label>
                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" placeholder="A">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputState" class="form-label h5">Tanggal Pemesanan Lapangan</label>
                            <input disabled type="date" class="form-control bg-white" id="ExpiredDate" placeholder="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputJam" class="form-label h5">Jam Bermain</label>
                            <select disabled id="inputJam" class="form-select bg-white">
                                <option selected>Pilih jam anda bermain...</option>
                                <option selected value="1">09.00 - 10.00</option>
                                <option value="2">10.00 - 11.00</option>
                                <option value="3">11.00 - 12.00</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputState" class="form-label h5">Total Biaya</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="Rp. 155000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="d-flex justify-content-center mb-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

@endsection