@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Nota Dinas</h1>
    </div>
    <div class="card">
        <div class="card-header fs-5 d-flex justify-content-between">
          <h5>Input Nota Dinas</h5>
            <a href=""><span data-feather="minus" class="align-middle"></span></a>
          </div>
          <div class="card-body">
            <div class="col-lg-10">
              <form action="/dashboard/datanotadinas/{{ $sppd->nota_dinas->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                  @csrf
                  <div class="row mb-3">
                    <label for="nomor" class="col-sm-4 col-form-label">No. Nota Dinas</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{ old('nomor', $sppd->nota_dinas->nomor) }}">
                    </div>
                    @error('nomor')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="row mb-3">
                      <label for="tanggal" class="col-sm-4 col-form-label">Tgl Nota Dinas</label>
                      <div class="col-sm-6">
                          <div class="input-group mb-3">
                            <span class="input-group-text"><span data-feather="calendar" class="align-text-bottom"></span></span>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal">
                          </div>                          
                      </div>
                      @error('tanggal')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_perjalanan" class="col-sm-4 col-form-label">Jenis Perjalanan Dinas</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control @error('jenis_perjalanan') is-invalid @enderror" id="jenis_perjalanan" name="jenis_perjalanan" value="{{ old('jenis_perjalanan', $sppd->nota_dinas->jenis_perjalanan) }}">
                        </div>
                        @error('jenis_pejalanan')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                      </div>
                      <div class="row mb-3">
                        <label for="aktivitas" class="form-label col-sm-4 col-form-label @error('aktivitas') is-invalid @enderror">aktivitas</label>
                        <div class="col-sm-6">
                            <select id="aktivitas" class="form-select" name="aktivitas" required>
                                <option value="" disabled selected>--Pilih aktivitas--</option>
                                <option {{ ($sppd->nota_dinas->aktivitas) == 'rutin' ? 'selected' : '' }} value="rutin">Rutin</option>
                                <option {{ ($sppd->nota_dinas->aktivitas) == 'non rutin' ? 'selected' : '' }} value="non rutin">Non Rutin</option>
                            </select>
                        </div> 
                        @error('aktivitas')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                        <div class="col-sm-6">
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" aria-label="With textarea" id="keterangan" name="keterangan"></textarea>
                        </div>
                        @error('keterangan')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                      </div>
                      <div class="row mb-3">
                        <label for="file" class="col-sm-4 col-form-label">File</label>
                        <div class="col-sm-6">
                            <input class="form-control @error('file') is-invalid @enderror" type="file" id="file" name="file">
                        </div>
                        @error('file')    
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                      </div>                      
                  <div class="row mb-3 d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary border w-50">Lanjut</button>
                  </div>
              </form>
          </div>
          </div>
      </div>
@endsection
