@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data GL Khusus</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Input GL</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">

        <div class="col-lg-7 ms-auto me-auto">
            <form method="post" action="{{ url('dashboard/dataGl/'.$datagl->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label class="pb-1 col-2 fw-bold" for="nomor" class="form-label">Nomor</label>
              <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" required value="{{ old('nomor', $datagl->nomor)  }}">
              @error('nomor')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3 col-2">
                <label for="lampiran" class="form-label fw-bold @error('lampiran') is-invalid @enderror">Lampiran</label>
                <select id="lampiran" class="form-select" name="lampiran" required>
                    <option value="" disabled selected>-</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                </select>
                @error('lampiran')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="pb-1 col-2 fw-bold" for="vendor" class="form-label">Yth</label>
              <input type="text" class="form-control @error('vendor') is-invalid @enderror" id="vendor" name="vendor" required value="{{ old('vendor', $datagl->vendor)  }}">
              @error('vendor')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $datagl->alamat)  }}">
                @error('alamat')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" required value="{{ old('kota', $datagl->kota)  }}">
                @error('kota')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="telephone" class="form-label">Telp</label>
                <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" required value="{{ old('telephone', $datagl->telephone)  }}">
                @error('telephone')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="up" class="form-label">Up</label>
                <input type="text" class="form-control @error('up') is-invalid @enderror" id="up" name="up" required value="{{ old('up' , $datagl->up) }}">
                @error('up')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="catatan1" class="form-label">Catatan 1</label>
                <textarea type="text" class="form-control @error('catatan1') is-invalid @enderror" id="catatan1" name="catatan1" required>{{ old('catatan1' , $datagl->catatan1) }}</textarea>
                @error('catatan1')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="catatan2" class="form-label">Catatan 2</label>
                <textarea type="text" class="form-control @error('catatan2') is-invalid @enderror" id="catatan2" name="catatan2" required >{{ old('catatan2' , $datagl->catatan2) }}</textarea>
                @error('catatan2')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="catatan3" class="form-label">Catatan 3</label>
                <textarea type="text" class="form-control @error('catatan3') is-invalid @enderror" id="catatan3" name="catatan3" required>{{ old('catatan1' , $datagl->catatan1) }}</textarea>
                @error('catatan3')    
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