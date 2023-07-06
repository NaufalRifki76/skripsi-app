@extends('layout.penyedia-lapangan.layout')
@php
    use App\Models\RentHours;
@endphp
@section('mitra')
    <style>
        .background-img-riwayat {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("{{ asset('Assets/riwayat-pemesanan/bg.jpg') }}");
        }
    </style>
    @include('layout.penyedia-lapangan.modal')
    <div class="card mt-3 d-flex shadow p-3 m-5" style="border: none;">
        <div class="text-center">
            <h2 class="my-5 fw-bold" style="color: #439a97">Berikan Alasan Untuk Penolakan Pemesanan!</h2>
        </div>
        <div class="row g-3">
            <div class="container">
                <form action="{{ route('store-deny-order', ['id' => $id]) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="card shadow-lg background-img-riwayat mb-5"
                                style="border: none; border-radius: 12px">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="inputState" class="form-label h5">Nama Pemesan</label>
                                            <input type="text" disabled class="form-control bg-white" id=""
                                                value="{{ $order->cust_name }}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label class="h5">Status</label><br>
                                            @if ($order->confirmation == 0)
                                                <h5><span class="badge bg-warning text-white">Pending</span></h5>
                                            @elseif ($order->confirmation == 1)
                                                <h5><span class="badge bg-success text-white">Diterima</span></h5>
                                            @elseif ($order->confirmation == 2)
                                                <h5><span class="badge bg-danger text-white">Ditolak</span></h5>
                                            @endif
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label class="h5">Bukti Transfer</label><br>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#bukti-transfer"><i class="fa-solid fa-eye"></i></button>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputState" class="form-label h5">No Telepon Pemesan</label>
                                            <input type="text" disabled class="form-control bg-white" id=""
                                                value="{{ $order->cust_number }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputState" class="form-label h5">Email Pemesan</label>
                                            <input type="text" disabled class="form-control bg-white" id=""
                                                value="{{ $order->cust_email }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputState" class="form-label h5">Lapangan</label>
                                            <input type="text" disabled class="form-control bg-white" id=""
                                                value="{{ $order->field }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputState" class="form-label h5">Tanggal Pemesanan Lapangan</label>
                                            <input disabled type="date" class="form-control bg-white" id=""
                                                value="{{ $order->order_date }}">
                                        </div>
                                        @php
                                            $hours = RentHours::where('order_id', $order->id)->first();
                                        @endphp
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label h5">Jam Bermain</label>
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
                                        <div class="col-md-6 mb-3">
                                            <label for="inputState" class="form-label h5">Total Biaya</label>
                                            <input type="text" disabled class="form-control bg-white" id="" value="Rp. {{ $order->price_sum }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cancel_reason" class="h5">Alasan Pemesanan Ditolak</label>
                                <textarea class="form-control border-2" style="background-color: #fff" id="cancel_reason" name="cancel_reason"
                                    rows="3" placeholder="Tuliskan alasan anda menolak pesanan ini..."></textarea>
                            </div>
                            <div class="text-center mt-4 mb-3 mx-5">
                                <button type="submit" class="btn-green-hover text-decoration-none">Kirim</button>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
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
