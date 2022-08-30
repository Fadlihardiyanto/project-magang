@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manajemen Pengguna</h1>
</div>


<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Manajemen Pengguna</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
        <div class="d-flex align-items-end justify-content-end">
            <a href="/dashboard/manajemen/create" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">Unit Kerja</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Level</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">

                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->unitkerja->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->level }}</td>
                    <td>
                        <a href="{{ url('/dashboard/manajemen/'.$user->id.'/edit') }}" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        <form action="{{ url('/dashboard/manajemen/'.$user->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger border-0"><span data-feather="x" class="align-text-bottom"></span></button>
                        </form>
                    </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>



@endsection