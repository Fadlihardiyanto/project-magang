@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Anggaran</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Anggaran</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
        <div class="d-flex align-items-end justify-content-end">
            <a href="/dashboard/anggaran/create" class="btn btn-primary btn-sm text-right"><i class="bi bi-plus"></i> 
        Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Unitkerja</th>
                    <th scope="col" class="text-center">Tahun</th>
                    <th scope="col" class="text-center">TW I</th>
                    <th scope="col" class="text-center">TW II</th>
                    <th scope="col" class="text-center">TW III</th>
                    <th scope="col" class="text-center">TW IV</th>
                    <th scope="col" class="text-center">Total</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($anggarans as $anggaran)
                  <?php $a = $anggaran->tw1;
                     $b = $anggaran->tw2;
                     $c = $anggaran->tw3;
                     $d = $anggaran->tw4;
                     $total = $a + $b + $c + $d;
                                        ?>
                <tr>
                  <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggaran->unitkerja->unitkerja_name }}</td>
                    <td>{{ $anggaran->tahun }}</td>
                    <td>@currency($anggaran->tw1)</td>
                    <td>@currency($anggaran->tw2 )</td>
                    <td>@currency($anggaran->tw3)</td>
                    <td>@currency($anggaran->tw4) </td>
                    <td>@currency($total)</td>
                    
                    <td class="text-center">
                        <a href="{{ url('/dashboard/anggaran/'.$anggaran->id.'/edit') }}" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        <form action="{{ url('#') }}" method="POST" class="d-inline">
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