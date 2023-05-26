@extends('layout.penyedia-lapangan.layout')
@php
    use App\Models\RentHours;
@endphp
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
                <a href="{{ route('auth.dashboard') }}">
                    <button class="btn-green-hover" style="border-radius: 24px"><i class="fa-solid fa-arrow-left fa-xl"></i></button>
                </a>
            </div>
            <div class="col-8 text-center py-4"
                style="background-color: #439a97; border-bottom-right-radius: 12px; border-bottom-left-radius: 12px">
                <h1 style="color: white">Halaman Detail Pemesanan</h1>
                <h5 class="mt-3" style="color: #FCE700">Lihat detail pemesanan "{{$order->cust_name}}" di bawah!</h5>
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
                                <input type="text" disabled class="form-control bg-white" id="" value="{{$order->cust_name}}"
                                    placeholder="">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="text-white h5">Status</label><br>
                                @if ($order->confirmation == 0)
                                    <h5><span class="badge bg-warning text-white">Pending</span></h5>
                                @elseif ($order->confirmation == 1)
                                    <h5><span class="badge bg-success text-white">Diterima</span></h5>
                                @elseif ($order->confirmation == 2)
                                    <h5><span class="badge bg-danger text-white">Ditolak</span></h5>
                                @endif
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="text-white h5">Bukti Transfer</label><br>
                                <button class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">No Telepon Pemesan</label>
                                <input type="text" disabled class="form-control bg-white" id="" value="{{$order->cust_number}}"
                                    placeholder="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Email Pemesan</label>
                                <input type="text" disabled class="form-control bg-white" id="" value="{{$order->cust_email}}"
                                    placeholder="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Lapangan</label>
                                <input type="text" disabled class="form-control bg-white" id="" value="{{$order->field}}" placeholder="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label text-white h5">Tanggal Pemesanan Lapangan</label>
                                <input disabled type="date" class="form-control bg-white" id="" placeholder="" value="{{$order->order_date}}">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
