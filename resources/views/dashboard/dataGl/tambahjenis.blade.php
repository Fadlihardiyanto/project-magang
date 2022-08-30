@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data GL Khusus</h1>
</div>

<div class="card">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>View GL</h5>
      <a href=""><span data-feather="minus" class="align-middle"></span></a>
    </div>
    <div class="card-body">

    <table class="mb-2">
        <tbody>
          <tr><td >Nomor</td><td class="col-1">:</td><td class=" fw-bold col-6">{{ $datagl->nomor }}</td></tr>
          <tr><td >Lampiran</td><td class="col-1">:</td><td class="fw-bold col-6">{{ $datagl->lampiran }}</td></tr>
          <tr><td >Hal</td><td class="col-1">:</td><td class="fw-bold col-6">Surat Jaminan</td></tr>
        </tbody>
      </table>

    <table class="ms-2">
        <tbody>
          <tr><td class="col-6">Yth. <span class="fw-bold">{{ $datagl->vendor }}</span></td></tr>
          <tr><td class="col-6">{{ $datagl->alamat }}</td></tr>
          <tr><td class="col-6">{{ $datagl->kota }}</td></tr>
          <tr><td class="col-6">telp. {{ $datagl->telephone }}</td></tr>
          <tr><td class="col-6 pt-2 pb-2">up. {{ $datagl->up }}</td></tr>
          <tr><td class="col-6 pt-2 pb-2">Bersama ini kami sampaikan permohonan penyediaan kendaraan, sebagai berikut:</td></tr>
        </tbody>
      </table>

        <div class="d-flex align-items-end justify-content-end">
            <a href="/dashboard/dataGl/tambahjenis" class="btn btn-primary btn-sm text-right" data-bs-toggle="modal" data-bs-target="#tambahjenis"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        
        <table class="table mt-3" >
        <thead>
            <tr>
                <th rowspan="2" class="text-center">#</th>
                <th rowspan="2" class="text-center">Jenis</th>
                <th rowspan="2" class="text-center">Unit</th>
                <th colspan="3" class="text-center">Pelaksanan</th>
                <th rowspan="2" class="text-center"></th>
            </tr>
            <tr>
                <th class="text-center">Hari</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Tujuan</th>
            </tr>
        </thead>
        @if ($tambahjenis != null)
        <tbody>
            <tr>
                <td><span class="d-block mt-3">1</span></td>
                <td class="text-center">{{ $tambahjenis->jenis }}</td>
                <td class="text-center">{{ $tambahjenis->unit }}</td>
                <td class="text-center">{{ $tambahjenis->hari }}</td>
                <td class="text-center">{{ $tambahjenis->tanggal }}</td>
                <td class="text-center">{{ $tambahjenis->tujuan }}</td>
                <td>
                  <form action="/dashboard/dataGl/tambahjenis/{{ $tambahjenis->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0 mt-3" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><span data-feather="x"></span></button>
                  </form>
              </td>
            </tr>
        </tbody>
        @else
            <tbody class="table-group-divider">
                <tr>
                    <td colspan="14" class="text-center">No data available in table</td>
                </tr>
            </tbody>
        @endif
        </table>

        <div class="d-flex align-items-end justify-content-center">
            <a href="/dashboard/dataGl/create" class="btn btn-primary btn-sm text-right"><i class="bi bi-printer"></i> 
        Print</a>
        </div>
        
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahjenis" tabindex="-1" aria-labelledby="tambahjenis" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahjenis">Tambah Jenis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ url('dashboard/dataGl/tambahjenis') }}" method="post">
              @csrf
            <input type="hidden" class="form-control @error('datagl_id') is-invalid @enderror" id="datagl_id" name="datagl_id" value="{{ $datagl->id }}">
            <div class="row mb-4">
                <label for="jenis" class="col-sm-4 col-form-label">Jenis</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                </div>
                @error('jenis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="unit" class="col-sm-4 col-form-label">Unit</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit" name="unit" required>
                </div>
                @error('unit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="hari" class="col-sm-4 col-form-label">Hari</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" required>
                </div>
                @error('hari')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required>
                </div>
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-4">
                <label for="tujuan" class="col-sm-4 col-form-label">Tujuan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" required>
                </div>
                @error('tujuan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>



@endsection