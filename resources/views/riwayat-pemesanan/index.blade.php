@extends('layout.index')
@php
    use App\Models\RentHours;
@endphp
@section('content')

<style>
    .background-img-riwayat {
    background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Assets/riwayat-pemesanan/bg.jpg");
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
            <form action="{{ route('riwayat-order') }}" method="post">
                {{ csrf_field() }}
                <div class="row py-4 mx-5">
                    <div class="col-md-10 mb-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nama-lapangan"
                                placeholder="Nama Lapangan Yang Anda Cari ..." name="search">
                            <label for="nama-lapangan">Nama Lapangan</label>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <button type="submit" id="" name="" class="btn-green-transition mt-2">Cari Lapangan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @if ($orders == null)
                <h5 class="my-5" style="color: #439a97">Anda belum pernah melakukan order!</h5>
            @else
                <h5 class="my-5" style="color: #439a97">Harap perlihatkan bukti pemesanan pada pihak penyedia lapangan yang anda pesan!</h5>
                @foreach ($orders as $key => $order)
                    <div class="card shadow-lg background-img-riwayat mb-5" style="border: none; border-radius: 12px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">Nama Pemesan</label>
                                        <input type="text" disabled class="form-control bg-white" id="" value="{{$order->cust_name}}"
                                            placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputState" class="form-label text-white h5">Nama Lapangan</label>
                                        <input type="text" disabled class="form-control bg-white" id="" value="{{$order->venue_name}}"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-5" style="margin-top: 35px">
                                    <div class="card bg-transparent border-white border-3" style="border-radius: 12px;">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2">
                                            <b class="text-white">Status Pemesanan:</b> 
                                            @if ($order->confirmation == 0)
                                                <span class="badge bg-warning shadow">Menunggu</span>
                                            @elseif ($order->confirmation == 1)
                                                <span class="badge bg-success shadow">Berhasil</span>
                                            @elseif ($order->confirmation == 2)
                                                <span class="badge bg-danger shadow">Dibatalkan</span>
                                            @endif
                                            </h5>
                                            @if ($order->confirmation == 0)
                                                <p class="fs-6 text-white" style="margin-bottom: -5px">  Menunggu di setujui oleh pihak lapangan!</p>
                                            @elseif ($order->confirmation == 1)
                                                <p class="fs-6" style="margin-bottom: -5px">  Pesanan anda berhasil!</p>
                                            @elseif ($order->confirmation == 2)
                                                <p class="fs-6" style="margin-bottom: -5px">  Pesanan anda dibatalkan!
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label text-white h5">No Telpon Pemesan</label>
                                    <input type="text" disabled class="form-control bg-white" id="" value="{{$order->cust_number}}" placeholder="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label text-white h5">Email Pemesan</label>
                                    <input type="text" disabled class="form-control bg-white" id="" value="{{$order->cust_email}}" placeholder="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label text-white h5">Lapangan</label>
                                    <input type="text" disabled class="form-control bg-white" id="" value="{{$order->field}}" placeholder="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label text-white h5">Tanggal Pemesanan Lapangan</label>
                                    <input disabled type="date" class="form-control bg-white" id="" value="{{$order->order_date}}" placeholder="">
                                </div>
                                @php
                                    $hours = RentHours::where('order_id', $order->id)->first();
                                @endphp
                                <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        @if ($hours->up00 == 1)
                                            <div class="col">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">00.00 - 01.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up01 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">01.00 - 02.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up02 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">02.00 - 03.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up03 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">03.00 - 04.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up04 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">04.00 - 05.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up05 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">05.00 - 06.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up06 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">06.00 - 07.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up07 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">07.00 - 08.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up08 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">08.00 - 09.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up09 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">09.00 - 10.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up10 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">10.00 - 11.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up11 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">11.00 - 12.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up12 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">12.00 - 13.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up13 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">13.00 - 14.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up14 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">14.00 - 15.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up15 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">15.00 - 16.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up16 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">16.00 - 17.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up17 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">17.00 - 18.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up18 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">18.00 - 19.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up19 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">19.00 - 20.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up20 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">20.00 - 21.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up21 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">21.00 - 22.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up22 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">22.00 - 23.00</option>
                                                </select>
                                            </div>
                                        @endif
                                        @if ($hours->up23 == 1)
                                            <div class="col mb-3">
                                                <select id="inputJam" disabled class="form-select bg-white">
                                                    <option value="">23.00 - 00.00</option>
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col mb-3">
                                            <label for="inputState" class="form-label text-white h5">Total Biaya</label>
                                            <input type="text" disabled class="form-control bg-white" id="" value="Rp. {{$order->price_sum}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                @if ($order->confirmation == 2)
                                    <div class="form-group">
                                        <label for="cancel_reason" class="h5">Alasan Pemesanan Ditolak</label>
                                        <textarea class="form-control border-2" style="background-color: #fff" id="cancel_reason" name="cancel_reason" rows="3"
                                            placeholder="">{{$order->cancel_reason}}</textarea>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection