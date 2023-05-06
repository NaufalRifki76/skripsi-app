@extends('layout.index')

@section('content')
    <div class="container">
        <p class="h3 fw-bold text-center py-5" style="color: #439A97">Konfirmasi Pemesanan Lapangan Anda</p>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <form action="">
                            <div class="row mb-4">
                                <h4 style="color: #439A97"> Data Diri Pemesan</h4>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h5">Nama Pemesan</label>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Isinya nama yang didaftarin pas regist, tapi bisa dia ganti sendiri juga">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5">No Telepon</label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="Isinya nomor yang didaftarin pas regist, tapi bisa dia ganti sendiri juga">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label h5">Email</label>
                                            <input type="text" class="form-control" id=""
                                                placeholder="Isinya nomor yang didaftarin pas regist, tapi bisa dia ganti sendiri juga">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="color: #439A97"> Data Lapangan Yang Dipesan</h4>

                                <p class="h5 mb-3">Nama Lapangan: <b>Stadion Madya Gelora Bung Karno</b></p>
                                <p class="h5 mb-3">Lapangan: <b>A</b></p>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h5">Pilih tanggal pemesanan lapangan</label>
                                    <input type="date" class="form-control" id="ExpiredDate" placeholder="">
                                </div>
                                <div class="row fieldGroup mb-3">
                                    <div class="col-md-6">
                                        <label for="inputJam" class="form-label h5">Jam Bermain</label>
                                        <select id="inputJam" class="form-select">
                                            <option selected>Pilih jam anda bermain...</option>
                                            <option selected value="1">09.00 - 10.00</option>
                                            <option value="2">10.00 - 11.00</option>
                                            <option value="3">11.00 - 12.00</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label h5">Harga Sewa</label>
                                        <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                            placeholder="Rp. 150000">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h5">Biaya Pemesanan</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="Rp. 5000">
                                </div>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label h5">Total Biaya Yang Harus Dibayar</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="Rp. 155000">
                                </div>
                                <div class="text-center mt-4 mb-3">
                                    <a href="{{ route('lapangan.pesan.pembayaran') }}"
                                        class="btn-green-hover text-decoration-none">Lanjutkan Pembayaran</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
@endsection
