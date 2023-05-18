@extends('layout.index')

@section('content')

<div class="container">
    <div class="py-5">
        <p class="h1 fw-bold text-center" style="color: #439A97">Ajukan Pengembalian Dana</p>
        <p class="h5 fw-normal text-center" style="color: #FCE700">Syarat dan ketentuan apabila ingin mengajukan pengembalian dana!</p>
    </div>
    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow-lg mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <div class="text-center mt-3">
                            <h4 class="fw-bold" style="color: #439A97"> Syarat dan Ketentuan Pengembalian Dana</h4>
                        </div>
                        <div class="mt-3 mx-3" style="text-align: justify">
                            <p class="fs-5">1. Pastikan pemesanan yang anda lakukan statusnya ditolak.</p>
                            <p class="fs-5">2. Jika status pemesanan yang anda lakukan ditolak, segera mengisi formulir pengembalian dana dengan menekan tombol di bawah.</p>
                            <p class="fs-5">3. Pastikan sudah mengisi formulir pengembalian dana dengan lengkap dan benar sebelum menekan tombol kirim.</p>
                            <p class="fs-5">4. Jika sudah mengirim formulir pengembalian dana, admin Main Bola akan melakukan pengecekan formulir yang diajukan dan transaksi yang dilakukan oleh pengguna.</p>
                            <p class="fs-5">5. Jika hasil pengecekan menunjukkan pemesanan ditolak karena kesalahan dari pihak lapangan, maka admin main bola akan mengembalikan dana pemesanan 100%, tidak termasuk biaya pemesanan Rp. 5000.</p>
                            <p class="fs-5">6. Jika hasil pengecekan menunjukkan pemesanan ditolak karesan kesalah pengguna seperti: bukti transfer yang diupload palsu, salah transfer, dan lainnya, maka dana pemesanan tidak akan dikembalikan.</p>
                            <p class="fs-5">7. Hasil dari proses pengembalian dana akan dikirim ke email pengguna.</p>
                            <p class="fs-5">8. Pengembalian dana akan diproses maksimal 7 hari waktu kerja setelah proses pengecekan selesai.</p>
                            <p class="fs-6 mt-4" style="color: #FCE700">Jika anda telah menyetujui syarat dan ketentuan pengembalian dana, silahkan klik tombol di bawah untuk mengisi formulir!</p>
                        </div>
                        <div class="text-center mb-3">
                            <a href="{{ route('pengembalian-dana.index') }}" class="btn-green-hover text-decoration-none">Formulir Pengembalian Dana</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
    </div>
</div>
@endsection