@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan Anggaran</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Laporan Anggaran</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
          <div class="card">
            <div class="card-header text-bg-primary">
                <span data-feather="dollar-sign" class="align-text-bottom"></span> Laporan Anggaran
            </div>
            <div class="card-body">
                <div>
                    <img src="/images/Jasa_Marga_logo.png" alt="" width="230px">
                </div>

                <div class="mt-3">
                    <h5 class="text-center">LAPORAN ANGGARAN
                    </h5>
                    <div style="overflow-x:auto;"> 
                        <div class="container">
                            <div class="row mt-3 mb-3">
                                <div class="col-md-4">
                                    <label class="fw-semibold fs-6">Tahun</label>
                                    <select data-column="1" id="filter-tahun" class="form-control filter-select form-select custom-select">
                                        <option value="">--Pilih Tahun--</option>
                                        @foreach ($tahuns as $tahun)
                                            <option value={{ $tahun }}>{{ $tahun }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-semibold fs-6">Divisi</label>
                                    <select data-column="2" id="filter-divisi" class="form-control filter-select form-select custom-select">
                                        <option value="">--Pilih Divisi--</option>
                                        @foreach ($unitkerjas as $u)
                                            <option value={{ $u }}>{{ $u }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped table-bordered table-hover user_datatable">
                                        <thead>
                                            <tr>
                                                <th class="col-0">#</th>
                                                <th class="col-0">Tahun</th>
                                                <th class="col-2">Unit Kerja</th>
                                                <th class="col-2">TW I</th>
                                                <th class="col-2">TW II</th>
                                                <th class="col-2">TW III</th>
                                                <th class="col-2">TW IV</th>
                                                <th class="col-2">Total Anggaran</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                
            </div>
          </div>

          
    </div>
</div>


{{-- <script>
    const anggaranIndexUrl =  '{{ route('laporan_anggaran.index') }}';
</script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<script type="text/javascript">

    $(function () {
      var table = $('.user_datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('laporananggaran.index') }}",
          "dom": "Blfrtip",
                    "buttons": [
                        {
                        extend : 'print',
                        title : 'Laporan Anggaran',
                        customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="https://1.bp.blogspot.com/-_iGP8qZDd7o/YMXkfmvKleI/AAAAAAAAFTU/WLPDIgwRYEYeZWoXiPAwYlhwQ7PruUcUgCLcBGAsYHQ/s1600/Logo%2BJasa%2BMarga.png" style=" width: 260px;" />'
                        );

                        $(win.document.body).find( 'table' ).addClass( 'printable').css('font-size', '8.2pt');
                        $(win.document.body).find('th').css('border', '1px solid #808080');
                        $(win.document.body).find('tr').css('border', '0.1em solid #808080');
                        $(win.document.body).find('td').css('padding', '2px');
                        $(win.document.body).css('background-color', '#FFF'); 
                }

                    },
                    {
                        extend : 'excel',
                        title : 'Laporan Anggaran',
                        

                    },

                    {
                        extend : 'copyHtml5',
                        title : 'Laporan Anggaran',
                        footer: true,
                    },
                    ],
          
          columns: [
            {  
                "data": "id",
                "class": "align-top",
                "orderable": false,
                "searchable": false,
                "render": function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
                }  
            },
            {data: 'tahun', name: 'tahun'},
            {data: 'unitkerja_name', name: 'unitkerja_name'},
            {
                data: 'tw1', 
                name: 'tw1',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'tw2', 
                name: 'tw2',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'tw3', 
                name: 'tw3',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'tw4', 
                name: 'tw4',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
              {
                "data": null,
                "render": function(data, type, row, meta) {
                    var numFormat = $.fn.dataTable.render.number( '.', ',', 0, 'Rp ').display;
                    var total = parseInt(data.tw1) + parseInt(data.tw2) + parseInt(data.tw3) + parseInt(data.tw4);
                    return numFormat(total);
                }
            },
              
          ] 
      });
    
      $('.filter-select').change(function(){
        table.column( $(this).data('column'))
        .search( $(this).val() )
        .draw();
        });
    });

    

    
  </script>


@endsection



