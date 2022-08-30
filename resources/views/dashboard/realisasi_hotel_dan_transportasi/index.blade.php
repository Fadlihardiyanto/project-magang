@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Realisasi Biaya Hotel, Transport & Lain-lain</h1>
</div>

<div class="card mb-3">
    <div class="card-header fs-5 d-flex justify-content-between">
    <h5>Realisasi Biaya Hotel, Transport & Lain-lain</h5>
      <a class="btn border-0" data-bs-toggle="collapse" href="#hideshow" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(247,247,247,255)"><span data-feather="minus" class="align-text-bottom"></span></a>
    </div>
    <div class="card-body" id="hideshow">
          <div class="card">
            <div class="card-header text-bg-primary">
                <span data-feather="dollar-sign" class="align-text-bottom"></span> Realisasi Biaya Hotel, Transport & Lain-lain
            </div>
            <div class="card-body">

                <div>
                    <img src="/images/Jasa_Marga_logo.png" alt="" width="230px">
                </div>

                <div>
                    <h5 class="text-center">RKAP Biaya Hotel, Transport & Lain-lain</h5>
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
                            <label class="fw-semibold fs-6">Divisi</label>
                            <select data-column="1" id="filter-divisi" class="form-control filter-select form-select custom-select">
                                <option value="">--Pilih Divisi--</option>
                                @foreach ($unitkerjas as $u)
                                    <option value={{ $u }}>{{ $u }}</option>
                                @endforeach 
                            </select>
                        </div>
                    </div>
                    <div style="overflow-x:auto;">
                    <table class="table table-responsive table-light table-striped table-bordered table-hover mt-3 user_datatable" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Unit Kerja</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">RKAP (Rp)</th>
                                <th class="text-center">Realisasi Hotel Januari (Rp)</th>
                                <th class="text-center">Realisasi Transport Januari (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Januari (Rp)</th>
                                <th class="text-center">Realisasi Hotel Febuari (Rp)</th>
                                <th class="text-center">Realisasi Transport Febuari (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Febuari (Rp)</th>
                                <th class="text-center">Realisasi Hotel Maret (Rp)</th>
                                <th class="text-center">Realisasi Transport Maret (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Maret (Rp)</th>
                                <th class="text-center">Realisasi Hotel April (Rp)</th>
                                <th class="text-center">Realisasi Transport April (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain April (Rp)</th>
                                <th class="text-center">Realisasi Hotel Mei (Rp)</th>
                                <th class="text-center">Realisasi Transport Mei (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Mei (Rp)</th>
                                <th class="text-center">Realisasi Hotel Juni (Rp)</th>
                                <th class="text-center">Realisasi Transport Juni (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Juni (Rp)</th>
                                <th class="text-center">Realisasi Hotel Juli (Rp)</th>
                                <th class="text-center">Realisasi Transport Juli (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Juli (Rp)</th>
                                <th class="text-center">Realisasi Hotel Agustus (Rp)</th>
                                <th class="text-center">Realisasi Transport Agustus (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Agustus (Rp)</th>
                                <th class="text-center">Realisasi Hotel September (Rp)</th>
                                <th class="text-center">Realisasi Transport September (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain September (Rp)</th>
                                <th class="text-center">Realisasi Hotel Oktober (Rp)</th>
                                <th class="text-center">Realisasi Transport Oktober (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Oktober (Rp)</th>
                                <th class="text-center">Realisasi Hotel November (Rp)</th>
                                <th class="text-center">Realisasi Transport November (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain November (Rp)</th>
                                <th class="text-center">Realisasi Hotel Desember (Rp)</th>
                                <th class="text-center">Realisasi Transport Desember (Rp)</th>
                                <th class="text-center">Realisasi Lain-lain Desember (Rp)</th>
                                <th class="text-center">Total Realisasi (Rp)</th>
                                <th class="text-center">Sisa Saldo (Rp)</th>
                            </tr>
                        
                        </thead>
                            <tbody>
                                <tr>
                                    <td colspan="20" class="text-center">No data available in table</td>
                                </tr>
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
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
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
          ajax: "{{ route('realisasi_hotel_dan_transportasi.index') }}",
          "dom": "Blfrtip",
                    "buttons": [
                //         {
                //         extend : 'print',
                //         title : 'RKAP Biaya Hotel, Transport & Lain-lain',
                //         orientation: 'landscape',
                //         footer: true,
                //         customize: function ( win ) {
                //     $(win.document.body)
                //         .css( 'font-size', '5pt' )
                //         .prepend(
                //             '<img src="https://1.bp.blogspot.com/-_iGP8qZDd7o/YMXkfmvKleI/AAAAAAAAFTU/WLPDIgwRYEYeZWoXiPAwYlhwQ7PruUcUgCLcBGAsYHQ/s1600/Logo%2BJasa%2BMarga.png" style=" width: 260px;" />'
                //         );

                //         $(win.document.body).find( 'table' ).addClass( 'printable').css('font-size', 'pt');
                //         $(win.document.body).find('th').css('border', '1px solid #808080');
                //         $(win.document.body).find('tr').css('border', '0.1em solid #808080');
                //         $(win.document.body).find('td').css('padding', '2px');
                //         $(win.document.body).css('background-color', '#FFF'); 
                // }

                //     },
                    {
                        extend : 'excel',
                        title : 'RKAP Biaya Hotel, Transport & Lain-lain',
                        footer: true,
                        

                    },
                    
                    {
                        extend : 'copyHtml5',
                        title : 'RKAP Biaya Hotel, Transport & Lain-lain',
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

                    // Total Juli over all pages
                    total_juli = api
                        .column( 10 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total juli over this page
                    pageTotal_juli = api
                        .column( 10, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update juli footer
                    $( api.column( 10 ).footer() ).html(
                        numberRender (pageTotal_juli) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Agustus over all pages
                    total = api
                        .column( 11 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 11, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 11 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total September over all pages
                    total = api
                        .column( 12 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 12, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 12 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Oktober over all pages
                    total = api
                        .column( 13 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 13, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 13 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total November over all pages
                    total = api
                        .column( 14 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 14, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 14 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Desember over all pages
                    total = api
                        .column( 15 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 15, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 15 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Total Realisasi over all pages
                    total = api
                        .column( 16 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 16, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 16 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 17 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 17, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 17 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 18 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 18, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 18 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 19 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 19, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 19 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 20 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 20, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 20 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 21 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 21, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 21 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 22 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 22, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 22 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 23 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 23, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 23 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 24 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 24, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 24 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 25 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 25, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 25 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 26 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 26, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 26 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 27 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 27, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 27 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 28 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 28, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 28 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 29 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 29, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 29 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 30 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 30, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 30 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 31 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 31, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 31 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 32 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 32, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 32 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 33 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 33, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 33 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 34 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 34, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 34 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 35 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 35, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 35 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 36 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 36, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 36 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 37 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 37, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 37 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 38 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 38, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 38 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 39 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 39, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 39 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 40 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 40, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 40 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
                    );

                    // Total Sisa Saldo over all pages
                    total = api
                        .column( 41 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    pageTotal = api
                        .column( 41, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
    
                    $( api.column( 41 ).footer() ).html(
                        numberRender (pageTotal) /* + ' ( $' + total + ' total)' --> call total all page */
                    
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
                data: 'hotel_januari',
                name: 'hotel_januari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            
            {
                data: 'transport_januari',
                name: 'transport_januari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_januari', 
                name: 'lainlain_januari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi febuari
            {
                data: 'hotel_febuari',
                name: 'hotel_febuari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_febuari',
                name: 'transport_febuari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_febuari',
                name: 'lainlain_febuari',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi maret
            {
                data: 'hotel_maret',
                name: 'hotel_maret',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_maret',
                name: 'transport_maret',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_maret',
                name: 'lainlain_maret',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi april
            {
                data: 'hotel_april',
                name: 'hotel_april',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_april',
                name: 'transport_april',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_april',
                name: 'lainlain_april',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi mei
            {
                data: 'hotel_mei',
                name: 'hotel_mei',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_mei',
                name: 'transport_mei',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_mei',
                name: 'lainlain_mei',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi juni
            {
                data: 'hotel_juni',
                name: 'hotel_juni',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_juni',
                name: 'transport_juni',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_juni',
                name: 'lainlain_juni',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi juli
            {
                data: 'hotel_juli',
                name: 'hotel_juli',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_juli',
                name: 'transport_juli',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_juli',
                name: 'lainlain_juli',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi agustus
            {
                data: 'hotel_agustus',
                name: 'hotel_agustus',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_agustus',
                name: 'transport_agustus',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_agustus',
                name: 'lainlain_agustus',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi september
            {
                data: 'hotel_september',
                name: 'hotel_september',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_september',
                name: 'transport_september',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_september',
                name: 'lainlain_september',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi oktober
            {
                data: 'hotel_oktober',
                name: 'hotel_oktober',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_oktober',
                name: 'transport_oktober',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_oktober',
                name: 'lainlain_oktober',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //realisasi november
            {
                data: 'hotel_november',
                name: 'hotel_november',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_november',
                name: 'transport_november',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_november',
                name: 'lainlain_november',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
             //realisasi desember
             {
                data: 'hotel_desember',
                name: 'hotel_desember',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'transport_desember',
                name: 'transport_desember',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'lainlain_desember',
                name: 'lainlain_desember',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            //total_realisasi
            {
                data: 'total_realisasi', 
                name: 'total_realisasi',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            },
            {
                data: 'sisa_saldo', 
                name: 'sisa_saldo',
                render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' )
            }
              
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