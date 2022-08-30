@extends('layouts.main')

@section('container')
@if (session()->has('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('errors') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="post">
                    @csrf
                    <img class="my-4 img-fluid" src="/images/Jasa_Marga_logo.png" alt="Jasamarga Indonesia Highway Corp">
                    
                    <div class="shadow p-3 mt-3 bg-body rounded">
                        <h6 class="mb-3 fw-semibold text-center lh-lg text-dark">APLIKASI MONITORING <br> PEMESANAN HOTEL & TRANSPORT <br> (SPPD)</h6>   
                        <div class="form-floating">
                            <input type="username" style="margin-bottom: -1px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" class="form-control" id="username" name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem; background-color: #22569e; color:#fff" type="submit">Sign in</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
    

@endsection