@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Tambah Data User</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">

        <div class="col-lg-7 ms-auto me-auto">
            <form method="post" action="/dashboard/manajemen">
            @csrf
            <div class="mb-3">
              <label class="pb-1 fw-bold" for="username" class="form-label">Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
              @error('name')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="pb-1 fw-bold" for="username" class="form-label">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}">
              @error('username')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label class="pb-1 fw-bold" for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                @error('email')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="pb-1 fw-bold" for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
              @error('password')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="level" class="form-label fw-bold @error('level') is-invalid @enderror">Level</label>
                <select id="level" class="form-select" name="level" required>
                    <option value="" disabled selected>--Pilih Level--</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                @error('level')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="unitkerja_id" class="form-label fw-bold @error('unitkerja_id') is-invalid @enderror">Unit Kerja</label>
                <select id="unitkerja_id" class="form-select" name="unitkerja_id" required>
                    <option  disabled selected>--Pilih Unit Kerja--</option>
                    @foreach ($unitkerjas as $unitkerja)
                      @if(old('unitkerja_id') == $unitkerja->id)
                        <option value="{{ $unitkerja->id }}" selected>{{ $unitkerja->name }}</option>
                      @else
                        <option value="{{ $unitkerja->id }}">{{ $unitkerja->name }}</option>
                      @endif
                    @endforeach
                </select>
                @error('unitkerja_id')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
    </div> 
</div>



@endsection