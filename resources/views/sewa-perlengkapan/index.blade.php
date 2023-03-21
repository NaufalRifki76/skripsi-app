@extends('layout.index')

@section('content')
<div class="container"> 

        <div> 
            <p class="h1 fw-bold text-center mb-2"  style="color: #439A97">Sewa Perlengkapan</p> 
        </div> 
        <div> 
            <p class="h4 fw-normal text-center mb-5"  style="color: #FCE700">Nikmati sewa perlengkapan yang anda inginkan dengan murah, bersih, dan mudah  di sini !</p> 
        </div> 

  <form class="row g-3 mx-5">
    <div class="col-12">
        <label for="inputState" class="form-label">Nama Lapangan</label>
        <select id="inputState" class="form-select">
          <option selected>Pilih lapangan dimana anda ingin sewa perlengkapan ...</option>
          <option value="1">Lapangan Futsal A</option>
          <option value="2">Lapangan Futsal B</option>
          <option value="3">Lapangan Futsal C</option>
        </select>
      </div>
    <div class="col-12">
      <label for="cardnumber" class="form-label">Pilih Tanggal Sewa</label>
      <input type="date" class="form-control input-sm datePicker2 ui-datepicker" id="cardnumber">
    </div>

  </form>

    <div  class="card mt-5 border d-flex shadow p-3 mx-3"> 
      <div class="d-flex justify-content-end">
        <button class="btn" style="background-color: #62B6B7; color: white" type="submit" ><i class="fa-solid fa-plus"></i></button>
      </div>
      <form class="row g-3">
        <div class="col-12">
            <label for="inputState" class="form-label">Jenis Perlengkapan</label>
            <select id="inputState" class="form-select">
              <option selected>Pilih Perlengkapan ...</option>
              <option value="1">Sepatu A</option>
              <option value="2">Sepatu B</option>
              <option value="3">Sepatu C</option>
            </select>
          </div>
        <div class="col-md-4">
            <label for="ExpiredDate" class="form-label">Ukuran</label>
            <input type="text" class="form-control" id="ExpiredDate" placeholder="">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="ExpiredDate" placeholder="">
        </div>
        <div class="col-md-4">
            <label for="inputZip" class="form-label">Harga</label>
            <input type="text" class="form-control" id="inputZip" placeholder="">
        </div>
      </form>
    </div>
   
    <div class="d-flex justify-content-center mt-5">
        <button type="button" class="btn" style="background-color: #62B6B7; color: white">Sewa Perlengkapan</button>
    </div>    
</div>

@endsection