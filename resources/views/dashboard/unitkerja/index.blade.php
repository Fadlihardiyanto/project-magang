@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Unit Kerja</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Unit Kerja</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
        <div class="d-flex align-items-end justify-content-end">
            <a href="/dashboard/unitkerja/create" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col-1">#</th>
                    <th scope="col-5" class="text-center">Divisi</th>
                    <th scope="col-1" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($unitkerjas as $unitkerja)
                <tr>
                    <td class="col-1">{{ $loop->iteration }}</td>
                    <td class="col-8">{{ $unitkerja->unitkerja_name }}</td>
                    <td class="col-2 text-center">
                        <a href="{{ url('/dashboard/unitkerja/'.$unitkerja->id.'/edit') }}" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        
                        @if ($unitkerja->status==1)
                        <a href="{{ url('dashboard/unitkerja/status/0') }}/{{ $unitkerja->id }}" type="button" class="badge bg-success me-2 mb-1"><span data-feather="toggle-right" class="align-text-bottom"></span></a>
                        @elseif($unitkerja->status==0)
                        <a href="{{ url('dashboard/unitkerja/status/1') }}/{{ $unitkerja->id }}" type="button" class="badge bg-danger me-2 mb-1">
                          <span data-feather="toggle-left" class="align-text-bottom"></span></a>
                         </a>
                        @endif
                       
                    </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>



@endsection