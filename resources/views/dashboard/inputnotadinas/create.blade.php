@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Nota Dinas</h1>
    </div>
    <div class="card">
        <div class="card-header fs-5 d-flex justify-content-between">
          <h5>View SPPD</h5>
            <a href=""><span data-feather="minus" class="align-middle"></span></a>
          </div>
          <div class="card-body">
            <table class="table">
                  <tr>
                    <td>No. Nota Dinas :</td>
                    <td>{{ $nota_dinas->nomor }}</td>
                  </tr>
                  <tr>
                    <td>Tgl. Nota Dinas :</td>
                    <td>{{ $nota_dinas->tanggal }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Perjalanan Dinas :</td>
                    <td>{{ $nota_dinas->jenis_perjalanan }}</td>
                  </tr>
                  <tr>
                    <td>Aktivitas :</td>
                    <td>{{ $nota_dinas->aktivitas }}</td>
                  </tr>
                  <tr>
                    <td>Keterangan :</td>
                    <td>{{ $nota_dinas->keterangan }}</td>
                  </tr>
                  <tr>
                    <td>File :</td>
                    <td>{{ $nota_dinas->file }}</td>
                  </tr>
              </table>
          </div>
      </div>
      <div class="d-flex align-items-end justify-content-end">
        <a href="#" class="btn btn-primary btn-sm text-right my-3" data-bs-toggle="modal" data-bs-target="#sppd"><i class="bi bi-plus"></i> 
        Tambah Data</a>
    </div>
    <div class="card">
        <table class="table table-striped table-sm">
            <thead>
              <tr class="table-light">
                  <th scope="col">#</th>
                  <th scope="col">Action</th>
                  <th scope="col">NPP Nama Jabatan</th>
                  <th scope="col">Unit Kerja</th>
                  <th scope="col">Kota Tujuan</th>
                  <th scope="col">Tempat</th>
                  <th scope="col">Keperluan</th>
                  <th scope="col">Tgl berangkat</th>
                  <th scope="col">Tgl pulang</th>
                  <th scope="col">Ket</th>
                  <th scope="col">Hotel</th>
                  <th scope="col">Pesawat</th>
                  <th scope="col">Kereta</th>
                  <th scope="col">Travel</th>
              </tr>
            </thead>
                @if ($sppd != null)
                <tbody class="table-group-divider">
                {{-- @foreach ($sppds as $sppd) --}}
                <tr>
                    <td><span class="d-block mt-3">1</span></td>
                    <td>
                        <form action="/dashboard/inputnotadinas/create/{{ $sppd->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 mt-3" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><span data-feather="x"></span></button>
                        </form>
                    </td>
                    <td>{{ $sppd->pegawai->npp }} {{ $sppd->pegawai->name }} {{ $sppd->pegawai->jabatan }}</td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->pegawai->unitkerja->name }}</span></td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->kotatujuan->name }}</span></td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->nama_tempat }}</span></td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->keperluan_perjalanan }}</span></td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->tgl_berangkat }}</span></td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->tgl_kembali }}</span></td>
                    <td><span class="d-block mt-3 text-center">{{ $sppd->keterangan }}</span></td>
                    <td><span class="d-block mt-2 text-center">@if ($sppd->hotel)
                      <i class="bi bi-check-lg fs-4 text-success"></i>
                      @else
                      <i class="bi bi-x-lg fs-4 text-danger"></i>
                    @endif</span></td>
                    <td><span class="d-block mt-2 text-center">@if ($sppd->pesawat)
                        <i class="bi bi-check-lg fs-4 text-success"></i>
                        @else
                        <i class="bi bi-x-lg fs-4 text-danger"></i>
                    @endif</span></td>
                    <td><span class="d-block mt-2 text-center">@if ($sppd->kereta)
                        <i class="bi bi-check-lg fs-4 text-success"></i>
                        @else
                        <i class="bi bi-x-lg fs-4 text-danger"></i>
                    @endif</span></td>
                    <td><span class="d-block mt-2 text-center">@if ($sppd->travel)
                        <i class="bi bi-check-lg fs-4 text-success"></i>
                        @else
                        <i class="bi bi-x-lg fs-4 text-danger"></i>
                    @endif</span></td>
                </tr> 
                </tbody>
                {{-- @endforeach --}}
                @else
                    <tbody class="table-group-divider">
                        <tr>
                            <td colspan="14" class="text-center">No data available in table</td>
                        </tr>
                    </tbody>
                @endif
          </table>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/dashboard/datanotadinas" class="btn btn-primary btn-sm my-3 w-75">Selesai</a>
    </div>

    <!-- Modal -->
<div class="modal fade" id="sppd" tabindex="-1" aria-labelledby="sppdLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sppdLabel">Tambah Pegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/inputnotadinas/create" method="post">
              @csrf
              <input type="hidden" class="form-control @error('nota_dinas_id') is-invalid @enderror" id="nota_dinas_id" name="nota_dinas_id" value="{{ $nota_dinas->id }}">
              <div class="row mb-3">
                <label for="pegawai_id" class="col-sm-4 col-form-label @error('pegawai_id') is-invalid @enderror">NPP</label>
                <div class="col-sm-8">
                    <select id="pegawai_id" class="form-select" name="pegawai_id" required>
                        <option  disabled selected>--Pilih NPP--</option>
                        @foreach ($pegawais as $pegawai)
                          @if(old('pegawai_id') == $pegawai->id)
                            <option value="{{ $pegawai->id }}" selected>({{ $pegawai->npp }}) {{ $pegawai->name }}</option>
                          @else
                            <option value="{{ $pegawai->id }}">({{ $pegawai->npp }}) {{ $pegawai->name }}</option>
                          @endif
                        @endforeach
                    </select>
                </div>
                @error('pegawai_id')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="row mb-4">
                <label for="name" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                </div>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" required>
                </div>
                @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-3">
                <label for="kotatujuan_id" class="col-sm-4 col-form-label @error('kotatujuan_id') is-invalid @enderror">Unit Kerja</label>
                <div class="col-sm-8">
                    <select id="kotatujuan_id" class="form-select" name="kotatujuan_id" required>
                        <option  disabled selected>--Pilih Kota--</option>
                        @foreach ($kotas as $kota)
                          @if(old('kotatujuan_id') == $kota->id)
                            <option value="{{ $kota->id }}" selected>{{ $kota->name }}</option>
                          @else
                            <option value="{{ $kota->id }}">{{ $kota->name }}</option>
                          @endif
                        @endforeach
                    </select>
                </div>
                @error('kotatujuan_id')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
              <div class="row mb-4">
                <label for="nama_tempat" class="col-sm-4 col-form-label">Nama tempat</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama_tempat') is-invalid @enderror" id="nama_tempat" name="nama_tempat" required>
                </div>
                @error('nama_tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="keperluan_perjalanan" class="col-sm-4 col-form-label">Keperluan Perjalanan Dinas</label>
                <div class="col-sm-8">
                    <textarea class="form-control @error('keperluan_perjalanan') is-invalid @enderror" aria-label="With textarea" id="keperluan_perjalanan" name="keperluan_perjalanan"></textarea>
                </div>
                @error('keperluan_perjalanan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-3">
                <label for="tgl_berangkat" class="col-sm-4 col-form-label">Tgl berangkat</label>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                      <span class="input-group-text"><span data-feather="calendar" class="align-text-bottom"></span></span>
                      <input type="date" class="form-control @error('tgl_berangkat') is-invalid @enderror" name="tgl_berangkat" id="tgl_berangkat">
                    </div>                          
                </div>
                @error('tgl_berangkat')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="row mb-3">
                <label for="tgl_kembali" class="col-sm-4 col-form-label">Tgl kembali</label>
                <div class="col-sm-8">
                    <div class="input-group mb-3">
                      <span class="input-group-text"><span data-feather="calendar" class="align-text-bottom"></span></span>
                      <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" name="tgl_kembali" id="tgl_kembali">
                    </div>                          
                </div>
                @error('tgl_kembali')    
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="keterangan" class="col-sm-4 col-form-label">Keterangan </label>
                <div class="col-sm-8">
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" aria-label="With textarea" id="keterangan" name="keterangan"></textarea>
                </div>
                @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="sebagai" class="form-label col-sm-4 col-form-label @error('sebagai') is-invalid @enderror">Ket sebagai</label>
                <div class="col-sm-8">
                    <select id="sebagai" class="form-select" name="sebagai" required>
                        <option value="" disabled selected>--Pilih--</option>
                        <option value="pegawai">Pegawai</option>
                        <option value="komisaris">Komisaris</option>
                        <option value="direksi">Direksi</option>
                        <option value="tamu">Tamu</option>
                    </select>
                </div> 
                @error('sebagai')    
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="row mb-4">
                <div class="col-3 d-flex justify-content-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="hotel" name="hotel">
                      <label class="form-check-label" for="hotel">
                        Hotel
                      </label>
                    </div>
                  </div>
                  <div class="col-3 d-flex justify-content-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="pesawat" name="pesawat">
                      <label class="form-check-label" for="pesawat">
                        Pesawat
                      </label>
                    </div>
                  </div>
                  <div class="col-3 d-flex justify-content-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="kereta" name="kereta">
                      <label class="form-check-label" for="kereta">
                        Kereta
                      </label>
                    </div>
                  </div>
                  <div class="col-3 d-flex justify-content-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="travel" name="travel">
                      <label class="form-check-label" for="travel">
                        Travel
                      </label>
                    </div>
                  </div>                
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<script>
    const npp = document.querySelector('#pegawai_id');
    const name = document.querySelector('#name');
    const jabatan = document.querySelector('#jabatan');

    npp.addEventListener('change', function(){
        fetch('/dashboard/inputnotadinas/checkNpp')
        .then(response => response.json())
        .then(data => data.forEach(d => {
            if(npp.value == d.id){
                name.value = d.name 
                jabatan.value = d.jabatan
            }
        }));
    });
</script>  
@endsection
