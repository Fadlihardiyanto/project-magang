@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data GL Khusus</h1>
</div>

<div class="card">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Data GL</h5>
      <a href=""><span data-feather="minus" class="align-middle"></span></a>
    </div>
    <div class="card-body">
        <div class="d-flex align-items-end justify-content-end">
            <a href="/dashboard/dataGl/create" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Action</th>
                    <th scope="col" class="text-center">Nomor</th>
                    <th scope="col" class="text-center">Tgl</th>
                    <th scope="col" class="text-center">Vendor</th>
                    <th scope="col" class="text-center">Alamat</th>
                    <th scope="col" class="text-center">Telp</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($datagls as $datagl)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ url('/dashboard/dataGl/tambahjenis/'.$datagl->id) }}" class="badge bg-warning me-2 mb-1"><span data-feather="printer" class="align-text-bottom"></span></a>
                        <a href="{{ url('/dashboard/dataGl/'.$datagl->id.'/edit') }}" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        <form action="{{ url('/dashboard/dataGl/'.$datagl->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger border-0"><span data-feather="trash-2" class="align-text-bottom"></span></button>
                        </form>
                    </td>
                    <td>{{ $datagl->nomor }}</td>
                    <td>{{ $datagl->created_at }}</td>
                    <td>{{ $datagl->vendor }}</td>
                    <td>{{ $datagl->alamat }}</td>
                    <td>{{ $datagl->telephone }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>


@endsection