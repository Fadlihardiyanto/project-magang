@extends('dashboard.layouts.main')

@section('container')
    
    @can('admin')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Nota Dinas</h1>
        </div>
        <div class="card">
            <div class="card-header fs-5 d-flex justify-content-between">
                <h5>Data Nota Dinas</h5>
                <a href=""><span data-feather="minus" class="align-middle"></span></a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm" id="data-table">
                    <thead>
                    <tr class="table-light">
                        <th scope="col">#</th>
                        <th scope="col">Action</th>
                        <th scope="col">Status</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Nota Dinas</th>
                        <th scope="col">Tgl Nota Dinas</th>
                        <th scope="col">Jenis PD</th>
                        <th scope="col">Aktivitas</th>
                        <th scope="col">Ket</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @if ($sppds != null)
                                @foreach ($sppds as $sppd)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="" class="badge bg-success"><span data-feather="check" class="align-text-bottom"></span></a>
                                        <a href="" class="badge bg-warning"><span data-feather="search" class="align-text-bottom"></span></a>
                                        <form action="" method="post" class="d-inline-block">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><span data-feather="trash-2"></span></button>
                                        </form>
                                        <a href="" class="badge bg-primary text-decoration-none"><span data-feather="link-2" class="align-text-bottom mx-1"></span>GL</a>
                                    </td>
                                    <td><a href="#" style="text-decoration: none">{{ $sppd->nota_dinas->status }}<i class="bi bi-info-circle-fill mx-1"></i></a></td>
                                    <td>{{ $sppd->pegawai->unitkerja->name }}</td>
                                    <td>{{ $sppd->nota_dinas->nomor }}</td>
                                    <td>{{ $sppd->nota_dinas->tanggal }}</td>
                                    <td>{{ $sppd->nota_dinas->jenis_perjalanan }}</td>
                                    <td>{{ $sppd->nota_dinas->aktivitas }}</td>
                                    <td>{{ $sppd->nota_dinas->keterangan }}</td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Nota Dinas</h1>
        </div>
        <div class="card">
            <div class="card-header fs-5 d-flex justify-content-between">
                <h5>Data Nota Dinas</h5>
                <a href=""><span data-feather="minus" class="align-middle"></span></a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm" id="data-table">
                    <thead>
                    <tr class="table-light">
                        <th scope="col">#</th>
                        <th scope="col">Action</th>
                        <th scope="col">Status</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Nota Dinas</th>
                        <th scope="col">Tgl Nota Dinas</th>
                        <th scope="col">Jenis PD</th>
                        <th scope="col">Aktivitas</th>
                        <th scope="col">Ket</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @if ($sppds != null)
                                @foreach ($sppds as $sppd)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="/dashboard/datanotadinas/{{ $sppd->id }}/edit" class="badge bg-primary"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                                        <a href="/dashboard/datanotadinas/{{ $sppd->id }}" class="badge bg-warning"><span data-feather="search" class="align-text-bottom"></span></a>
                                        <form action="/dashboard/datanotadinas/{{ $sppd->id }}" method="post" class="d-inline-block">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><span data-feather="trash-2"></span></button>
                                        </form>
                                    </td>
                                    <td><a href="#" style="text-decoration: none">{{ $sppd->nota_dinas->status }}<i class="bi bi-info-circle-fill mx-1"></i></a></td>
                                    <td>{{ $sppd->pegawai->unitkerja->name }}</td>
                                    <td>{{ $sppd->nota_dinas->nomor }}</td>
                                    <td>{{ $sppd->nota_dinas->tanggal }}</td>
                                    <td>{{ $sppd->nota_dinas->jenis_perjalanan }}</td>
                                    <td>{{ $sppd->nota_dinas->aktivitas }}</td>
                                    <td>{{ $sppd->nota_dinas->keterangan }}</td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td></td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    @endcan

@endsection