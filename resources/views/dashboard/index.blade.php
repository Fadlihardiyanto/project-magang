@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>

  <div class="container">
    {{-- <div class="row">
      <div class="col-sm">
        <div id="kota_tujuan"></div>
      </div>
      <div class="col-sm">
        <div id="transportasi"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <div id="rekapitulasi"></div>
      </div>
      <div class="col-sm">
        <div id="jumlah_personil"></div>
      </div>
    </div> --}}

    <div class="row">
      <div class="col-6 border mb-2 rounded-4" ><div id="rekapitulasi"></div></div>
      <div class="col-6 border mb-2 rounded-4"><div id="jumlah_personil"></div></div>
      <div class="w-100"></div>
      <div class="col-6 border mb-2 rounded-4"><div id="kota_tujuan"></div></div>
      <div class="col-6 border mb-2 rounded-4"><div id="biaya_hotel"></div></div>
      <div class="w-100"></div>
      <div class="col-6 border mb-2 rounded-4"><div id="transportasi"></div></div>
      <div class="col-6 border mb-2 rounded-4"><div id="biaya_transportasi"></div></div>
    </div>
  </div>



  {{-- Sweet Alert --}}
  @include('sweetalert::alert')
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    Highcharts.chart('kota_tujuan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Berdasarkan Kota Tujuan'
    },
    xAxis: {
        categories: [
            'Bali',
            'Medan',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Kota Tujuan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        showInLegend: false,
        name: 'Total Kunjungan',
        data: [
          {y: 1, color: 'green'}, 
          2]

    },]
});


//grafik Transportasi
Highcharts.chart('transportasi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Berdasarkan Transportasi'
    },
    xAxis: {
        categories: [
            'Kereta',
            'Pesawat',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Penggunaan Transportasi'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        showInLegend: false,
        name: 'Total Penggunaan',
        data: [
          {y: 1, color: 'green'}, 
          2]

    },]
});

//grafik Rekapitulasi
Highcharts.chart('rekapitulasi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Berdasarkan Rekapitulasi Penggunaan Anggaran'
    },
    xAxis: {
        categories: [
            'COMMUNITY DEVELOPMENT GROUP',
            'REGULATOR MANAGEMENT DEPARTMENT',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Penggunaan Anggaran'
        }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            formatter:function(){

                return this.point.series.name + ': <b> Rp ' + Highcharts.numberFormat(this.point.options.y,0,',','.') + '</b><br/>'
            }
        },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        showInLegend: false,
        name: 'Total Penggunaan',
        data: [
          {y:20000000},
          {y:10000000},]

    },]
});

//grafik Jumlah Personil
Highcharts.chart('jumlah_personil', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Berdasarkan Jumlah Personil Yang Melakukan SPPD Berdasarkan Unit Kerja'
    },
    xAxis: {
        categories: [
          'COMMUNITY DEVELOPMENT GROUP',
          'REGULATOR MANAGEMENT DEPARTMENT',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Personil'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        showInLegend: false,
        name: 'Jumlah Personil Penggunaan SPPD',
        data: [
          {y: 4, color: 'green'}, 
          3]

    },]
});

//grafik biaya hotel
Highcharts.chart('biaya_hotel', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Realiasasi Penggunaan Biaya Hotel Berdasarkan Unit Kerja'
    },
    xAxis: {
        categories: [
          'COMMUNITY DEVELOPMENT GROUP',
          'REGULATOR MANAGEMENT DEPARTMENT',
          'KOMISARIS'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Penggunaan Realialisasi Penggunaan Biaya Hotel'
        }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            formatter:function(){

                return this.point.series.name + ': <b> Rp ' + Highcharts.numberFormat(this.point.options.y,0,',','.') + '</b><br/>'
            }
        },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        showInLegend: false,
        name: 'Total Penggunaan',
        data: [
          {y: 10000000, color: 'green'}, 
          5000000,
          {y: 10000000, color: 'orange'},]

    },]
});

//grafik biaya transportasi
Highcharts.chart('biaya_transportasi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Realiasasi Penggunaan Biaya Transportasi Berdasarkan Unit Kerja'
    },
    xAxis: {
        categories: [
          'COMMUNITY DEVELOPMENT GROUP',
          'REGULATOR MANAGEMENT DEPARTMENT',
          'KOMISARIS'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Penggunaan Realialisasi Penggunaan Biaya Transportasi'
        }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            formatter:function(){

                return this.point.series.name + ': <b> Rp ' + Highcharts.numberFormat(this.point.options.y,0,',','.') + '</b><br/>'
            }
        },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        showInLegend: false,
        name: 'Total Penggunaan',
        data: [
          {y: 10000000, color: 'green'}, 
          5000000,
          {y: 15000000, color: 'orange'},]

    },]
});
  </script>
@endsection