@extends('layout.index')

@section('content')
<section class="vh-100">
    <div class="container-fluid">
        
      <div class="row">
          <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="https://i.pinimg.com/474x/f3/50/75/f350753b65cb5de1b2e203913b81a609.jpg"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
        <div class="col-sm-6 text-black">
  
          <div class="d-flex justify-content-center">
            <img src="{{ asset('Assets/logo/logo.png') }}" class="img-fluid" width="300px" alt="logo">
          </div>

          <div class="d-flex align-items-center mx-3">
  
            <form style="width: 100%;">
  
              <div class="d-flex justify-content-center">
                <h3 class="fw-bold mb-3 pb-3"  style=" color: #439A97">Login</h3>

              </div>
  
              <div class="form-outline mb-4">
                <input type="email" id="form2Example18" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example18">Email address</label>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>
  
              <div>

              <div class="d-flex justify-content-center pt-1 mb-3">
                <button type="button" class="btn" style="background-color: #62B6B7; color: white">Login</button>
              </div>

              <div class="d-flex justify-content-center">
                <p class="small mb-3 "><a class="text-muted" href="#!">Lupa Sandi?</a></p>
              </div>

              <div  class="d-flex justify-content-center">
                <a href="/register" class="link-info" style=" color: #439A97">Belum Punya Akun?</a></p>
              </div>
  
            </form>
  
          </div>
  
        </div>
      
      </div>
    </div>
  </section>
@endsection
