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
            <form method="post" action="/dashboard/anggaran">
            @csrf

            <div class="mb-3">
                <label for="unitkerja_id" class="form-label fw-bold @error('unitkerja_id') is-invalid @enderror">Unit Kerja</label>
                <select id="unitkerja_id" class="form-select" name="unitkerja_id" required>
                    <option  disabled selected>--Pilih Unit Kerja--</option>
                    @foreach ($unitkerjas as $unitkerja)
                      @if(old('unitkerja_id') == $unitkerja->id)
                        <option value="{{ $unitkerja->id }}" selected>{{ $unitkerja->unitkerja_name }}</option>
                      @else
                        <option value="{{ $unitkerja->id }}">{{ $unitkerja->unitkerja_name }}</option>
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
                <label for="tahun" class="form-label fw-bold @error('tahun') is-invalid @enderror">Tahun</label>
                <select type="year" id="tahun" class="form-select" name="tahun" required>
                    <option value="" disabled selected>--Pilih Tahun--</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
                @error('tahun')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            {{-- <div class="mb-3">
                <label class="pb-1 fw-bold" for="tw1" class="form-label">Tahun</label>
                <div class="input-group mb-3">
                    <input type="year" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" required value="{{ old('tahun') }}" aria-label="Amount (to the nearest dollar)">
                </div>
                @error('tahun')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div> --}}
            
            <div class="mb-3">
                <label class="pb-1 fw-bold" for="tw1" class="form-label">Anggaran TW 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="decimal" class="form-control @error('tw1') is-invalid @enderror" id="tw1" name="tw1" required value="{{ old('tw1') }}" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('tw1')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label class="pb-1 fw-bold" for="tw1" class="form-label">Anggaran TW 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="decimal" class="form-control @error('tw2') is-invalid @enderror" id="tw2" name="tw2"  required value="{{ old('tw2') }}" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('tw2')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label class="pb-1 fw-bold" for="tw1" class="form-label">Anggaran TW 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="decimal" class="form-control @error('tw3') is-invalid @enderror" id="tw3" name="tw3"  required value="{{ old('tw3') }}" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('tw3')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            {{-- seharusnya ada js type-currency="IDR" --}}
            <div class="mb-3">
                <label class="pb-1 fw-bold" for="tw4" class="form-label">Anggaran TW 4</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="decimal" class="form-control @error('tw4') is-invalid @enderror" id="tw4" name="tw4"    required value="{{ old('tw4') }}" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('tw4')    
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