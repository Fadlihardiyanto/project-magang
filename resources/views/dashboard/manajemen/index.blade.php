@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manajemen Pengguna</h1>
</div>

<div class="card">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Manajemen Pengguna</h5>
      <a href=""><span data-feather="minus" class="align-middle"></span></a>
    </div>
    <div class="card-body">
        <div class="d-flex align-items-end justify-content-end">
            <a href="#" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Unit Kerja</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">

                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->unit_kerja }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->level }}</td>
                    <td>
                        <a href="/dashboard/manajemen/{{ $user->id }}" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        <a href="" class="badge bg-danger"><span data-feather="x" class="align-text-bottom"></span></a>
                    </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>


@endsection