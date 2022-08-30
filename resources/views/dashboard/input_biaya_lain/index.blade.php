@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Biaya Lain</h1>
</div>


<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Biaya Lain</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
        <div class="table-responsive mt-3">
            <table class="table table-striped table-sm" id="data-table">
              <thead>
                <tr class="table-light">
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Action</th>
                    <th scope="col" class="text-center">NPP</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Unit Kerja</th>
                    <th scope="col" class="text-center">Tgl Berangkat</th>
                    <th scope="col" class="text-center">Tujuan</th>
                    <th scope="col" class="text-center">Tempat</th>
                    <th scope="col" class="text-center">Keperluan</th>
                    <th scope="col" class="text-center">Ket</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                {{-- <tr>
                  <td colspan="14" class="text-center">No data available in table</td>
                </tr> --}}

                {{-- @foreach ($users as $user) --}}
                <tr>
                  {{-- <td>1</td>
                  <td>
                        <a href="#" class="badge bg-primary me-2 mb-1"><span data-feather="edit-2" class="align-text-bottom"></span></a>
                        <form action="#" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger border-0"><span data-feather="x" class="align-text-bottom"></span></button>
                        </form>
                    </td> --}}
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>No data available in table</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                {{-- @endforeach --}}
              </tbody>
            </table>
          </div>
    </div>
</div>



@endsection