@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Realisasi Per Triwulan</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Realisasi Per Triwulan</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
          <div class="card">
            <div class="card-header text-bg-primary">
                <span data-feather="dollar-sign" class="align-text-bottom"></span> Realisasi Per Triwulan
            </div>
            <div class="card-body">
                <div>
                    <img src="/images/Jasa_Marga_logo.png" alt="" width="230px">
                </div>

                <div>
                    <h5 class="text-center">RKAP Per Triwulan</h5>

                    <div class="row mt-3 mb-3">
                        <div class="col-md-4">
                            <label class="fw-semibold fs-6">Tahun</label>
                            <select data-column="2" id="filter-tahun" class="form-control filter-select form-select custom-select">
                                <option value="">--Pilih Tahun--</option>
                                @foreach ($tahuns as $g)
                                    <option value={{ $g }}>{{ $g }}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="fw-semibold fs-6">Triwulan</label>
                            <select data-column="1" id="filter-triwulan" class="form-control filter-select form-select custom-select">
                                <option value="">--Pilih Triwulan--</option>
                                <option value="1">TW I</option>
                                <option value="2">TW II</option>
                                <option value="3">TW III</option>
                                <option value="4">TW IV</option>
                            </select>
                        </div>
                    </div>

                    <div style="overflow-x:auto;"> 
                    <table class="table table-responsive table-light table-striped table-bordered table-hover mt-3 user_datatable" >
                        <thead>
                            <tr>
                                <th rowspan="2" class="" >#</th>
                                <th rowspan="2" class="text-center">Unit Kerja</th>
                                <th rowspan="2" class="text-center">Tahun</th>
                                <th rowspan="2" class="text-center col-2">RKAP(Rp)</th>
                                <th colspan="4" class="text-center">Realisasi</th>
                                <th rowspan="2" class="text-center col-2">Total Realisasi Keseluruhan TW (Rp)</th>
                                <th rowspan="2" class="text-center border col-2">Sisa Saldo (Rp)</th>
                            </tr>
                            <tr>
                                <th class="text-center ">Januari</th>
                                <th class="text-center">Febuari</th>
                                <th class="text-center">Maret</th>
                                <th class="text-center"> Total Realisasi TW I (Rp)</th>
                            </tr>
                        </thead>
                            <tbody class="table-group-divider">
                            </tbody>

                        <tfoot>
                            <tr>
    
                                <th colspan="3" class="text-center"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                
                            </tr>
                        </tfoot>
                         
                        </table>
                    </div>
                </div>

                
            </div>
          </div>

          
    </div>
</div>



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
      var numberRender =  $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' ).display;
      var table = $('.user_datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('realisasi_per_triwulan.index') }}",
          "dom": "Blfrtip",
                    "buttons": [
                        {
                        extend : 'print',
                        title : 'RKAP Per Triwulan',
                        footer: true,
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
                        title : 'RKAP Per Triwulan',
                        footer: true,
                        

                    },
                    {
                        extend : 'copyHtml5',
                        title : 'RKAP Per Triwulan',
                        footer: true,
                    },
                    ],

                    "footerCallback": function ( row, data, start, end, display ) {
                                var api = this.api(), data;
        
                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };
        
                    // Total RAKP over all pages
                    total_rkap = api
                        .column( 3 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total RKAP over this page
                    pageTotal_rkap = api
                        .column( 3, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update RKAP footer
                    $( api.column( 3 ).footer() ).html(
                        numberRender (pageTotal_rkap) /* + ' ( $' + total + ' total)' --> call total all page */
                    );

                    // Total TW1 over all pages
                    total_tw1 = api
                        .column( 4 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total TW1 over this page
                    pageTotal_tw1 = api
                        .column( 4, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update TW1 footer
                    $( api.column( 4 ).footer() ).html(
                        numberRender (pageTotal_tw1) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total TW2 over all pages
                    total_tw2 = api
                        .column( 5 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total TW2 over this page
                    pageTotal_tw2 = api
                        .column( 5, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update TW2 footer
                    $( api.column( 5 ).footer() ).html(
                        numberRender (pageTotal_tw2) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                     // Total TW3 over all pages
                     total_tw3 = api
                        .column( 6 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total TW3 over this page
                    pageTotal_tw3 = api
                        .column( 6, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update TW3 footer
                    $( api.column( 6 ).footer() ).html(
                        numberRender (pageTotal_tw3) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total TW4 over all pages
                    total_tw4 = api
                        .column( 7 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total TW4 over this page
                    pageTotal_tw4 = api
                        .column( 7, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update TW4 footer
                    $( api.column( 7 ).footer() ).html(
                        numberRender (pageTotal_tw4) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Realisasi over all pages
                    total_realisasi = api
                        .column( 8 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total Realiasi over this page
                    pageTotal_realisasi = api
                        .column( 8, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update total realisasi footer
                    $( api.column( 8 ).footer() ).html(
                        numberRender (pageTotal_realisasi) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total_sisa_saldo = api
                        .column( 9 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total Realiasi over this page
                    pageTotal_sisa_saldo = api
                        .column( 9, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update total sisa saldo footer
                    $( api.column( 9 ).footer() ).html(
                        numberRender (pageTotal_sisa_saldo) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );


                    
                },
                    
          
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
            {data: 'unitkerja_name', name: 'unitkerja_name'},
            {data: 'tahun_anggaran', name: 'tahun_anggaran'},
            {
                data: 'total_anggaran', 
                name: 'total_anggaran',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            
            {
                data: 'januari', 
                name: 'januari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'febuari', 
                name: 'febuari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'maret', 
                name: 'maret',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'realisasi_tw1', 
                name: 'realisasi_tw1',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'total_realisasi', 
                name: 'total_realisasi',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            
            {
                data: 'sisa_saldo', 
                name: 'sisa_saldo',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
              
          ],
           
          
      });
      $('.filter-select').change(function(){
        table.column( $(this).data('column'))
        .search( $(this).val() )
        .draw();
        });

    });

    

    
  </script>



@endsection