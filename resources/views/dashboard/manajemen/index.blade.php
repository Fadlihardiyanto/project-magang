@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manajemen Pengguna</h1>
</div>

<div class="card">
    <div class="card-header fs-5">
      Manajemen Pengguna
    </div>
    <div class="card-body">
        <div class="d-flex align-items-end justify-content-end">
            <a href="#" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>

        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>COMMUNITY DEVELOPMENT GROUP</td>
            <td>test@gmail.com</td>
            <td>Admin</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>


@endsection