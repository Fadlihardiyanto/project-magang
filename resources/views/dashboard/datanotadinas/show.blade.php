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
                    <td>{{ $sppd->nota_dinas->nomor }}</td>
                  </tr>
                  <tr>
                    <td>Tgl. Nota Dinas :</td>
                    <td>{{ $sppd->nota_dinas->tanggal }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Perjalanan Dinas :</td>
                    <td>{{ $sppd->nota_dinas->jenis_perjalanan }}</td>
                  </tr>
                  <tr>
                    <td>Aktivitas :</td>
                    <td>{{ $sppd->nota_dinas->aktivitas }}</td>
                  </tr>
                  <tr>
                    <td>Keterangan :</td>
                    <td>{{ $sppd->nota_dinas->keterangan }}</td>
                  </tr>
                  <tr>
                    <td>File :</td>
                    <td>{{ $sppd->nota_dinas->file }}</td>
                  </tr>
              </table>
          </div>
      </div>
     
    <div class="card mt-5">
        <table class="table table-striped table-sm">
            <thead>
              <tr class="table-light">
                  <th scope="col">#</th>
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
        <a href="/dashboard/datanotadinas" class="btn btn-primary btn-sm my-3 w-75">Back</a>
    </div> 
@endsection
