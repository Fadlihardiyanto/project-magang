@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Biaya Khusus</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Tambah Data Biaya Khusus</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">

        <div class="col-lg-7 ms-auto me-auto">
            <form method="post" action="/dashboard/data_biaya_khusus">
            @csrf

            <div class="mb-3">
                <label for="tgl_proses" class="pb-1 col-2 fw-bold">Tgl Proses</label>
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                      <span class="input-group-text"><span data-feather="calendar" class="align-text-bottom"></span></span>
                      <input type="date" class="form-control @error(' tgl_proses') is-invalid @enderror" name=" tgl_proses" id="tgl_proses">
                    </div>                          
                </div>
                @error('tgl_proses')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

            <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="keterangan" class="form-label">Ket</label>
                <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required value="{{ old('keterangan') }}"></textarea>
                @error('keterangan')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

            <div class="mb-3">
              <label class="pb-1 col-5 fw-bold" for="karyawan" class="form-label">Nama Karyawan / Tamu</label>
              <input type="text" class="form-control @error('karyawan') is-invalid @enderror" id="karyawan" name="karyawan" required value="{{ old('karyawan') }}">
              @error('karyawan')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label class="pb-1 fw-bold" for="biaya" class="form-label">Biaya</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="decimal" class="form-control @error('biaya') is-invalid @enderror" id="biaya" name="biaya"  required value="{{ old('biaya') }}" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('biaya')    
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

              <div class="mb-3">
                <label class="pb-1 col-2 fw-bold" for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" required value="{{ old('periode') }}">
                @error('periode')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="mb-3">
                <label class="pb-1 col-5 fw-bold" for="kegiatan" class="form-label">Kegiatan / Acara</label>
                <textarea type="text" class="form-control @error('kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan" required value="{{ old('kegiatan') }}"></textarea>
                @error('kegiatan')    
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