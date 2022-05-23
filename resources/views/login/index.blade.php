@extends('layouts.main')


@section('container')

  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

    
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <img class="mb-5 img-fluid" src="../images/Jasa_Marga_logo.png" alt="">
              <h1 class="h4 mb-3 fw-semibold text-center lh-lg text-light">APLIKASI MONITORING <br> PEMESANAN HOTEL & TRANSPORT <br> (SPPD)</h1>
                
            <div class="border border-light p-3 bg-dark text-dark bg-opacity-75">
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username" autofocus required value="{{ old ('username') }}">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password"class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </div>
             
            </form>
          </main>
    </div>
</div>


@endsection