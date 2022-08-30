@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Biaya Khusus</h1>
</div>

<div class="card">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Data Biaya Khusus</h5>
      <a href=""><span data-feather="minus" class="align-middle"></span></a>
    </div>
    <div class="card-body">
        <div class="d-flex align-items-end justify-content-end">
            <a href="/dashboard/data_biaya_khusus/create" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Action</th>
                    <th scope="col" class="text-center">Tgl Proses</th>
                    <th scope="col" class="text-center">Keterangan</th>
                    <th scope="col" class="text-center">Nama Karyawan/Tamu</th>
                    <th scope="col" class="text-center">Biaya</th>
                    <th scope="col" class="text-center">Unit</th>
                    <th scope="col" class="text-center">Periode</th>
                    <th scope="col" class="text-center">Kegiatan</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($data_biaya_khusus as $data)
                <tr>
                    <td class="col-1">{{ $loop->iteration }}</td>
                    <td class="text-center col-2">
                        <a href="{{ url('/dashboard/data_biaya_khusus/'.$data->id.'/edit') }}" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        <form action="{{ url('/dashboard/data_biaya_khusus/'.$data->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger border-0"><span data-feather="trash-2" class="align-text-bottom"></span></button>
                        </form>
                    </td>
                    <td class="text-center col-2">{{ $data->tgl_proses }}</td>
                    <td class="text-center col-1">{{ $data->keterangan }}</td>
                    <td class="text-center col-1">{{ $data->karyawan }}</td>
                    <td class="text-center col-2">@currency($data->biaya)</td>
                    <td class="text-center col-3">{{ $data->unitkerja->name }}</td>
                    <td class="text-center col-1">{{ $data->periode }}</td>
                    <td class="text-center col-1">{{ $data->kegiatan }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>


@endsection