@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Realisasi Per Tahun</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Realiasi Per Tahun</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
        <div class="card mb-3" style="max-width: 18rem;">
            <div class="card-header text-bg-primary"><span data-feather="calendar" class="align-text-bottom"></span> Realisasi</div>
            <div class="card-body">
                <div class="mb-3">
                <select id="filter-tahun" class="form-select select-filter" name="tahun" required>
                    <option value="" disabled selected>--Pilih tahun--</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    {{-- @foreach($anggarans as $anggaran)
                    <option value="{{$anggaran->tahun}}">{{$anggaran->tahun}}</option>
                    @endforeach --}}
                </select>
                </div>
            </div>

          </div>
          <div class="card">
            <div class="card-header text-bg-primary">
                <span data-feather="dollar-sign" class="align-text-bottom"></span> Realiasi Per Tahun
            </div>
            <div class="card-body">

                <div class="d-flex align-items-end justify-content-end">
                    <div class="card mb-3 text-right " style="max-width: 18rem;">
                        <div class="card-header text-bg-secondary "></div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-sm btn-primary"><span data-feather="printer" class="align-text-bottom"></span> Print</a>
                                <a href="#" class="btn btn-sm btn-success"><span data-feather="file" class="align-text-bottom"></span> Excel</a>
                            </div>
                    </div>
                </div>

                <div>
                    <img src="/images/Jasa_Marga_logo.png" alt="" width="230px">
                </div>

                <div>
                    <h6 class="text-center">RKAP Tahun 2022</h6>
                    <div style="overflow-x:auto;"> 
                    <table class="table table-bordered mt-3" >
                        <thead class="border table-secondary border-dark">
                            <tr>
                                <th rowspan="2" >#</th>
                                <th rowspan="2" class="text-center border border-dark">Unit Kerja</th>
                                <th rowspan="2" class="text-center border border-dark">RKAP Tahun 2022(Rp)</th>
                                <th colspan="4" class="text-center border border-dark">Realisasi</th>
                                <th rowspan="2" class="text-center border border-dark">Total Realisasi (Rp)</th>
                            </tr>
                            <tr>
                                <th class="text-center border border-dark">TW I (Rp)</th>
                                <th class="text-center border border-dark">TW II (Rp)</th>
                                <th class="text-center border border-dark">TW III (Rp)</th>
                                <th class="text-center border border-dark">TW IV (Rp)</th>
                            </tr>
                        </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <td colspan="14" class="text-center">No data available in table</td>
                                </tr>
                            </tbody>

                        <tfoot class="border border-dark table-secondary">
                            <tr class="border border-dark">
                                <th colspan="2" class="text-center border border-dark">Total</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                            </tr>
                        </tfoot>
                         
                        </table>
                    </div>
                </div>

                
            </div>
          </div>

          <div class="card mt-4">
            <div class="card-header text-bg-primary">
                <span data-feather="dollar-sign" class="align-text-bottom"></span> Realiasi Per Bulan
            </div>
            <div class="card-body">

                <div class="d-flex align-items-end justify-content-end">
                    <div class="card mb-3 text-right " style="max-width: 18rem;">
                        <div class="card-header text-bg-secondary "></div>
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-sm btn-primary"><span data-feather="printer" class="align-text-bottom"></span> Print</a>
                                <a href="#" class="btn btn-sm btn-success"><span data-feather="file" class="align-text-bottom"></span> Excel</a>
                            </div>
                    </div>
                </div>

                <div>
                    <img src="/images/Jasa_Marga_logo.png" alt="" width="230px">
                </div>

                <div>
                    <h6 class="text-center">RKAP Tahun 2022</h6>
                    <div style="overflow-x:auto;">
                    <table class="table table-bordered mt-3" >
                        <thead class="border table-secondary border-dark">
                            <tr>
                                <th rowspan="2" >#</th>
                                <th rowspan="2" class="text-center border border-dark">Unit Kerja</th>
                                <th rowspan="2" class="text-center border border-dark">RKAP Tahun 2022(Rp)</th>
                                <th colspan="12" class="text-center border border-dark">Realisasi</th>
                                <th rowspan="2" class="text-center border border-dark">Sisa Saldo(Rp)</th>
                                <th rowspan="2" class="text-center border border-dark">Total Realisasi (Rp)</th>
                            </tr>
                            <tr>
                                <th class="text-center border border-dark">Januari</th>
                                <th class="text-center border border-dark">Febuari</th>
                                <th class="text-center border border-dark">Maret</th>
                                <th class="text-center border border-dark">April</th>
                                <th class="text-center border border-dark">Mei</th>
                                <th class="text-center border border-dark">Juni</th>
                                <th class="text-center border border-dark">Juli</th>
                                <th class="text-center border border-dark">Agustus</th>
                                <th class="text-center border border-dark">September</th>
                                <th class="text-center border border-dark">Oktober</th>
                                <th class="text-center border border-dark">November</th>
                                <th class="text-center border border-dark">Desember</th>
                            </tr>
                        </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <td colspan="20" class="text-center">No data available in table</td>
                                </tr>
                            </tbody>

                        <tfoot class="border border-dark table-secondary">
                            <tr class="border border-dark">
                                <th colspan="2" class="text-center border border-dark">Total</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                                <th rowspan="1" class="text-center border border-dark">0</th>
                            </tr>
                        </tfoot>
                         
                        </table>
                    </div>
                </div>

                
            </div>
          </div>
    </div>
</div>



@endsection