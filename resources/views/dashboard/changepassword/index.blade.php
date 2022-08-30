@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ganti Password</h1>
</div>

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Ganti Password</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">

        <div class="col-lg-7 ms-auto me-auto">
            <form action="{{ route('change.password') }}" method="post">
            @csrf
            <div class="mb-3">
              <label class="pb-1 fw-bold" for="current_password" class="form-label">Password Saat Ini</label>
              <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" required >
              @error('current_password')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="pb-1 fw-bold" for="password" class="form-label">Password Baru</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
              @error('password')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="pb-1 fw-bold" for="password_confirmation" class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
              @error('password_confirmation')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            
            <div class="d-grid col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Simpan</button>
              </div>
            
          </form>
        </div>
    </div> 
</div>

@endsection