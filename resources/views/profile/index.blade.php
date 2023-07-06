@extends('layout.index')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center my-5">
            <div class="card col-10 shadow" style="border-radius: 12px; border: none;">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="mt-3 mb-4 fw-bold" style="color: #439a97">Profile Pengguna</h1>
                        <img src="{{ asset('Assets/profile/user.png') }}" class="img-fluid" width="150px" alt="profile">
                    </div>
                    <div class="row px-5 mt-5">
                        <div class="col-md-6">
                            <div class="mb-5">
                                <label for="nama" class="form-label h5">Nama</label>
                                <input class="form-control form-control-lg shadow bg-white" type="email" class="form-control"
                                    id="nama" aria-describedby="nama" disabled style="border: none;" value="{{ Sentinel::getUser()->name }}">
                            </div>
                            <div class="mb-5">
                                <label for="telepon" class="form-label h5">No. Telepon</label>
                                <input class="form-control form-control-lg shadow bg-white" type="email" class="form-control"
                                    id="telepon" aria-describedby="telepon" disabled style="border: none;" value="{{ Sentinel::getUser()->no_telephone }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5">
                                <label for="email" class="form-label h5">Email</label>
                                <input class="form-control form-control-lg shadow bg-white" type="email" class="form-control"
                                    id="email" aria-describedby="email" disabled style="border: none;" value="{{ Sentinel::getUser()->email }}">
                            </div>
                            <div class="mb-5">
                                <label for="jenis-akun" class="form-label h5">Jenis Akun</label>
                                <input class="form-control form-control-lg shadow bg-white" type="email" class="form-control"
                                    id="jenis-akun" aria-describedby="jenis-akun" disabled style="border: none;" 
                                    @if (Sentinel::getUser()->vip_status == 0)
                                    value="Akun Biasa">
                                    @elseif (Sentinel::getUser()->vip_status == 1)
                                    value="VIP">
                                    @endif
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
