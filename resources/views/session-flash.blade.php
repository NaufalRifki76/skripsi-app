@if(Session::has('success'))
    <div class="alert alert-sm alert-border-left alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
        <i class="fa-solid fa-circle-info pr10"></i>
        <strong>Sukses: </strong> {!! Session::get('success') !!}
    </div>
@endif

@if(Session::has('failed'))
    <div class="alert alert-sm alert-border-left alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
        <i class="fa-solid fa-circle-info pr10"></i>
        <strong>Gagal: </strong> {!! Session::get('failed') !!}
    </div>
@endif

{{-- @if($errors->all())
    <div class="alert alert-sm alert-border-left alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
        <i class="fa-solid fa-circle-info pr10"></i>
        <strong>Gagal: </strong> Silahkan login terlebih dahulu, atau register apabila anda belum mempunyai akun.
    </div>
@endif --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <strong>Gagal: Cek kembali form anda!</strong> {!! Session::get('failed') !!}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif