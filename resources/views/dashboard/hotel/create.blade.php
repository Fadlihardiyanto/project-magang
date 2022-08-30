@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hotel</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Tambah Data Hotel</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">

        <div class="col-lg-7 ms-auto me-auto">
            <form method="post" action="/dashboard/hotel">
            @csrf
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="name" class="form-label">Nama Hotel</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
              @error('name')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="rate" class="form-label">Rate</label>
              <select id="level" class="form-select" name="rate" required>
                    <option value="" disabled selected>--Pilih Rate--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
              </select>
              @error('rate')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
              @error('email')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="cp" class="form-label">CP</label>
              <input type="text" class="form-control @error('cp') is-invalid @enderror" id="cp" name="cp" required value="{{ old('cp') }}">
              @error('cp')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="nomor_telepon" class="form-label">Telepon</label>
              <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" required value="{{ old('nomor_telepon') }}">
              @error('nomor_telepon')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="fax" class="form-label">Fax</label>
              <input type="text" class="form-control @error('fax') is-invalid @enderror" id="fax" name="fax" required value="{{ old('fax') }}">
              @error('fax')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 d-flex">
              <label class="p-2 col-2 fw-bold" for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat') }}">
              @error('alamat')    
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