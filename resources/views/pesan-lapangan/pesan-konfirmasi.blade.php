@extends('layout.index')

@section('content')
    <div class="container">
        <div class="my-3">
            <a href="#" class="text-decoration-none ">
                <button type="button" id="" name="" class="btn-green-hover">Kembali Ke Halaman Sebelumnya</button>
            </a>
        </div>
        <p class="h3 fw-bold text-center py-5" style="color: #439A97">Konfirmasi Pemesanan Lapangan Anda</p>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card background-img-pemesanan shadow mb-5" style="border: none; border-radius: 12px">
                    <div class="card-body">
                        <form action="">
                            <div class="row mb-4">
                                <h4 class="fw-bold" style="color: #fff"> Data Diri Pemesan</h4>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Nama Pemesan</label>
                                    <input type="text" class="form-control bg-white" disabled id="" value="{{$order_info->cust_name}}"
                                        placeholder="Isinya nama yang didaftarin pas regist, tapi bisa dia ganti sendiri juga">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label text-white h5">No Telepon</label>
                                            <input type="text" class="form-control bg-white" disabled id="" value="{{$order_info->cust_number}}"
                                                placeholder="Isinya nomor yang didaftarin pas regist, tapi bisa dia ganti sendiri juga">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputState" class="form-label text-white h5">Email</label>
                                            <input type="text" class="form-control bg-white" disabled id="" value="{{$order_info->cust_email}}"
                                                placeholder="Isinya nomor yang didaftarin pas regist, tapi bisa dia ganti sendiri juga">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="fw-bold" style="color: #fff"> Data Lapangan Yang Dipesan</h4>

                                <p class="h5 text-white mb-3">Nama Lapangan: <b>{{$order_info->venue_name}}</b></p>
                                <p class="h5 text-white mb-3">Lapangan: <b>{{$order_info->field_name}}</b></p>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Tanggal pemesanan lapangan</label>
                                    <input type="date" class="form-control bg-white" disabled id="ExpiredDate" placeholder="" value="{{$order_info->order_date}}">
                                </div>
                                @if ($venue_id_forrent->up00 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">00.00 - 01.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up01 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">01.00 - 02.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up02 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">02.00 - 03.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up03 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">03.00 - 04.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up04 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">04.00 - 05.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up05 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">05.00 - 06.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up06 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">06.00 - 07.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up07 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">07.00 - 08.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up08 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">08.00 - 09.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up09 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">09.00 - 10.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up10 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">10.00 - 11.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up11 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">11.00 - 12.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up12 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">12.00 - 13.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up13 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">13.00 - 14.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up14 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">14.00 - 15.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up15 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">15.00 - 16.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up16 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">16.00 - 17.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up17 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">17.00 - 18.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up18 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">18.00 - 19.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up19 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">19.00 - 20.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up20 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">20.00 - 21.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up21 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">21.00 - 22.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up22 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">22.00 - 23.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                @if ($venue_id_forrent->up23 == 1)
                                    <div class="row fieldGroup mb-3">
                                        <div class="col-md-6">
                                            <label for="inputJam" class="form-label text-white h5">Jam Bermain</label>
                                            <select id="inputJam" disabled class="form-select bg-white">
                                                <option value="">23.00 - 00.00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label text-white h5">Harga Sewa</label>
                                            <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$field->field_cost_hour}}"
                                                placeholder="">
                                        </div>
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Biaya Pemesanan</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate"
                                        placeholder="Rp. 5000">
                                </div>
                                <div class="mb-3">
                                    <label for="inputState" class="form-label text-white h5">Total Biaya Yang Harus Dibayar</label>
                                    <input type="text" disabled class="form-control bg-white" id="ExpiredDate" value="Rp. {{$order_info->price_sum}}"
                                        placeholder="Rp. 155000">
                                </div>
                                <div class="text-center mt-4 mb-3">
                                    <a href="{{ route('lapangan-transfer-funds', ['rentorder_id' => $order_info->id, 'venue_id' => $venueid]) }}"
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

    @push('css')
    <style>
        .background-img-pemesanan {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('Assets/background/bg-pesan.jpg') }}");
        }
    </style>
@endpush
@endsection
