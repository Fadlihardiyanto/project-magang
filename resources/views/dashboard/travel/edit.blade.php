@extends('dashboard.layouts.main')

@section('container')

    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">travel</h1>
</div>

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Edit Travel</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">

        <div class="col-lg-7 ms-auto me-auto">
            <form method="post" action="{{ url('dashboard/travel/'.$travel->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="name" class="form-label">Nama travel</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $travel->name) }}">
              @error('name')    
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