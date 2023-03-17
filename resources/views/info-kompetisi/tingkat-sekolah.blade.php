@extends('layout.index')

@section('content')
<div style="background-color: #ECFAF0">
    <div class="container">
        <br>
        <div> 
            <p class="h1 fw-bold text-center mb-2"  style="color: #439A97">Kompetisi Tingkat Sekolah</p> 
        </div> 
        <div> 
            <p class="h5 fw-normal text-center mb-3"  style="color: #FCE700">Tingkatkan bakat dan kemampuan yang anda miliki dengan mengikuti kompetisi sesuai kategori usia atau pendidikan yang tersedia</p> 
        </div> 
        <form class="row g-3 mx-5">
            <div class="col-md-7">
                <label for="inputState" class="form-label">Nama Kompetisi</label>
                <input type="text" class="form-control" id="ExpiredDate" placeholder="">
            </div>

            <div class="col-md-3">
                <label for="inputState" class="form-label">Kategori Pendidikan</label>
                <select id="inputState" class="form-select">
                  <option selected>Pilih Kategori ...</option>
                  <option value="1">SD</option>
                  <option value="2">SMP</option>
                  <option value="3">SMA</option>
                  <option value="3">Universitas</option>
                </select>
              </div>
              <div class="col-md-2 mt-5">
                <button type="button" class="btn" style="background-color: #62B6B7; color: white">Search</button>
            </div>    
        </form>
    </div>
    <br>
    <br>
</div>
@endsection
