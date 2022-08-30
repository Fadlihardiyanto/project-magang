<?php

namespace App\Http\Controllers;

use App\Models\RealisasiTotal;
use App\Models\Anggaran;
use App\Models\Unitkerja;
use App\Models\Realisasis;
use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;

class RealisasiHotelTranstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = RealisasiTotal::with('anggaran', 'realisasi_januari')->latest()->get();
        $anggaran = Anggaran::all();
        $unitkerja = Unitkerja::all();
        if ($request->ajax()) {
            $data = RealisasiTotal::select('*')->with('anggaran')->latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('unitkerja_name', function($row){
                return $row->anggaran->unitkerja->unitkerja_name;
             })
            ->addColumn('tahun_anggaran', function($row){
                return $row->anggaran->tahun;
             })

             //realisasi januari
             ->addColumn('transport_januari', function($row){
                return $row->realisasi_januari->realisasi_transport;
             })
             ->addColumn('hotel_januari', function($row){
                return $row->realisasi_januari->realisasi_hotel;
             })
             ->addColumn('lainlain_januari', function($row){
                return $row->realisasi_januari->realisasi_lainlain;
             })

             //realisasi febuari
             ->addColumn('hotel_febuari', function($row){
                return $row->realisasi_febuari->realisasi_hotel;
             })
             ->addColumn('transport_febuari', function($row){
                return $row->realisasi_febuari->realisasi_transport;
             })
             ->addColumn('lainlain_febuari', function($row){
                return $row->realisasi_febuari->realisasi_lainlain;
             })

             //realisasi maret
             ->addColumn('hotel_maret', function($row){
                return $row->realisasi_maret->realisasi_hotel;
             })
             ->addColumn('transport_maret', function($row){
                return $row->realisasi_maret->realisasi_transport;
             })
             ->addColumn('lainlain_maret', function($row){
                return $row->realisasi_maret->realisasi_lainlain;
             })

             //realisasi april
             ->addColumn('hotel_april', function($row){
               return $row->realisasi_april->realisasi_hotel;
            })
            ->addColumn('transport_april', function($row){
               return $row->realisasi_april->realisasi_transport;
            })
            ->addColumn('lainlain_april', function($row){
               return $row->realisasi_april->realisasi_lainlain;
            })

            //realisasi mei
            ->addColumn('hotel_mei', function($row){
               return $row->realisasi_mei->realisasi_hotel;
            })
            ->addColumn('transport_mei', function($row){
               return $row->realisasi_mei->realisasi_transport;
            })
            ->addColumn('lainlain_mei', function($row){
               return $row->realisasi_mei->realisasi_lainlain;
            })

            //realisasi juni
            ->addColumn('hotel_juni', function($row){
               return $row->realisasi_juni->realisasi_hotel;
            })
            ->addColumn('transport_juni', function($row){
               return $row->realisasi_juni->realisasi_transport;
            })
            ->addColumn('lainlain_juni', function($row){
               return $row->realisasi_juni->realisasi_lainlain;
            })

            //realisasi juli
            ->addColumn('hotel_juli', function($row){
               return $row->realisasi_juli->realisasi_hotel;
            })
            ->addColumn('transport_juli', function($row){
               return $row->realisasi_juli->realisasi_transport;
            })
            ->addColumn('lainlain_juli', function($row){
               return $row->realisasi_juli->realisasi_lainlain;
            })

            //realisasi agustus
            ->addColumn('hotel_agustus', function($row){
               return $row->realisasi_agustus->realisasi_hotel;
            })
            ->addColumn('transport_agustus', function($row){
               return $row->realisasi_agustus->realisasi_transport;
            })
            ->addColumn('lainlain_agustus', function($row){
               return $row->realisasi_agustus->realisasi_lainlain;
            })

            //realisasi september
            ->addColumn('hotel_september', function($row){
               return $row->realisasi_september->realisasi_hotel;
            })
            ->addColumn('transport_september', function($row){
               return $row->realisasi_september->realisasi_transport;
            })
            ->addColumn('lainlain_september', function($row){
               return $row->realisasi_september->realisasi_lainlain;
            })

             //realisasi oktober
             ->addColumn('hotel_oktober', function($row){
               return $row->realisasi_oktober->realisasi_hotel;
            })
            ->addColumn('transport_oktober', function($row){
               return $row->realisasi_oktober->realisasi_transport;
            })
            ->addColumn('lainlain_oktober', function($row){
               return $row->realisasi_oktober->realisasi_lainlain;
            })

            //realisasi november
            ->addColumn('hotel_november', function($row){
               return $row->realisasi_november->realisasi_hotel;
            })
            ->addColumn('transport_november', function($row){
               return $row->realisasi_november->realisasi_transport;
            })
            ->addColumn('lainlain_november', function($row){
               return $row->realisasi_november->realisasi_lainlain;
            })

            //realisasi desember
            ->addColumn('hotel_desember', function($row){
               return $row->realisasi_desember->realisasi_hotel;
            })
            ->addColumn('transport_desember', function($row){
               return $row->realisasi_desember->realisasi_transport;
            })
            ->addColumn('lainlain_desember', function($row){
               return $row->realisasi_desember->realisasi_lainlain;
            })

            ->addColumn('total_anggaran', function($row){
                return $row->anggaran->tw1 + $row->anggaran->tw2 + $row->anggaran->tw3 + $row->anggaran->tw4;
             })
             ->addColumn('total_realisasi', function($row){
               $januari = $row->realisasi_januari->realisasi_transport + 
               $row->realisasi_januari->realisasi_hotel +
               $row->realisasi_januari->realisasi_lainlain;

               $febuari = $row->realisasi_febuari->realisasi_hotel +
               $row->realisasi_febuari->realisasi_transport +
               $row->realisasi_febuari->realisasi_lainlain;

               $maret = $row->realisasi_maret->realisasi_hotel +
               $row->realisasi_maret->realisasi_transport +
               $row->realisasi_maret->realisasi_lainlain;

               $april = $row->realisasi_april->realisasi_hotel +
               $row->realisasi_april->realisasi_transport +
               $row->realisasi_april->realisasi_lainlain;

               $mei = $row->realisasi_mei->realisasi_hotel +
               $row->realisasi_mei->realisasi_transport +
               $row->realisasi_mei->realisasi_lainlain;

               $juni = $row->realisasi_juni->realisasi_hotel +
               $row->realisasi_juni->realisasi_transport +
               $row->realisasi_juni->realisasi_lainlain;

               $juli = $row->realisasi_juli->realisasi_hotel +
               $row->realisasi_juli->realisasi_transport +
               $row->realisasi_juli->realisasi_lainlain;

               $agustus = $row->realisasi_agustus->realisasi_hotel +
               $row->realisasi_agustus->realisasi_transport +
               $row->realisasi_agustus->realisasi_lainlain;

               $september = $row->realisasi_september->realisasi_hotel +
               $row->realisasi_september->realisasi_transport +
               $row->realisasi_september->realisasi_lainlain;

               $oktober = $row->realisasi_oktober->realisasi_hotel +
               $row->realisasi_oktober->realisasi_transport +
               $row->realisasi_oktober->realisasi_lainlain;

               $november = $row->realisasi_november->realisasi_hotel +
               $row->realisasi_november->realisasi_transport +
               $row->realisasi_november->realisasi_lainlain;

               $desember = $row->realisasi_desember->realisasi_hotel +
               $row->realisasi_desember->realisasi_transport +
               $row->realisasi_desember->realisasi_lainlain;


                return $januari + $febuari + $maret + $april + $mei + $juni + $juli + $agustus + $september + $oktober  + $november + $desember;
             })
             ->addColumn('sisa_saldo', function($row){
               $januari = $row->realisasi_januari->realisasi_transport + 
               $row->realisasi_januari->realisasi_hotel +
               $row->realisasi_januari->realisasi_lainlain;

               $febuari = $row->realisasi_febuari->realisasi_hotel +
               $row->realisasi_febuari->realisasi_transport +
               $row->realisasi_febuari->realisasi_lainlain;

               $maret = $row->realisasi_maret->realisasi_hotel +
               $row->realisasi_maret->realisasi_transport +
               $row->realisasi_maret->realisasi_lainlain;

               $april = $row->realisasi_april->realisasi_hotel +
               $row->realisasi_april->realisasi_transport +
               $row->realisasi_april->realisasi_lainlain;

               $mei = $row->realisasi_mei->realisasi_hotel +
               $row->realisasi_mei->realisasi_transport +
               $row->realisasi_mei->realisasi_lainlain;

               $juni = $row->realisasi_juni->realisasi_hotel +
               $row->realisasi_juni->realisasi_transport +
               $row->realisasi_juni->realisasi_lainlain;

               $juli = $row->realisasi_juli->realisasi_hotel +
               $row->realisasi_juli->realisasi_transport +
               $row->realisasi_juli->realisasi_lainlain;

               $agustus = $row->realisasi_agustus->realisasi_hotel +
               $row->realisasi_agustus->realisasi_transport +
               $row->realisasi_agustus->realisasi_lainlain;

               $september = $row->realisasi_september->realisasi_hotel +
               $row->realisasi_september->realisasi_transport +
               $row->realisasi_september->realisasi_lainlain;

               $oktober = $row->realisasi_oktober->realisasi_hotel +
               $row->realisasi_oktober->realisasi_transport +
               $row->realisasi_oktober->realisasi_lainlain;

               $november = $row->realisasi_november->realisasi_hotel +
               $row->realisasi_november->realisasi_transport +
               $row->realisasi_november->realisasi_lainlain;

               $desember = $row->realisasi_desember->realisasi_hotel +
               $row->realisasi_desember->realisasi_transport +
               $row->realisasi_desember->realisasi_lainlain;
               
               $total_realisasi = $januari + $febuari + $maret + $april + $mei + $juni + $juli + $agustus + $september + $oktober  + $november + $desember;
               
               $total_anggaran = $row->anggaran->tw1 + $row->anggaran->tw2 + $row->anggaran->tw3 + $row->anggaran->tw4;
                
                return $total_realisasi - $total_anggaran;
             })
            ->rawColumns(['unitkerja_name', 'tahun_anggaran', 'total_anggaran', 'total_realisasi', 'sisa_saldo', 'hotel_januari', 'transport_januari','lainlain_januari', 'hotel_febuari', 'transport_febuari', 'lainlain_febuari', 'hotel_maret', 'transport_maret', 'lainlain_maret', 'hotel_april', 'transport_april', 'lainlain_april', 'hotel_mei', 'transport_mei', 'lainlain_mei', 'hotel_juni', 'transport_juni', 'lainlain_juni', 'hotel_juli', 'transport_juni', 'lainlain_juni', 'hotel_agustus', 'transport_agustus', 'lainlain_agustus', 'hotel_september', 'transport_september', 'lainlain_september', 'hotel_oktober', 'transport_oktober', 'lainlain_oktober', 'hotel_november', 'transport_november', 'lainlain_november', 'hotel_desember', 'transport_desember', 'lainlain_desember'])
            ->make(true);
        }

        $tahuns = $anggaran->sortBy('tahuns')->pluck('tahun')->unique();
        $unitkerjas = $unitkerja->sortBy('unitkerjas')->pluck('unitkerja_name')->unique();


      
        return view('dashboard.realisasi_hotel_dan_transportasi.index', compact('data', 'tahuns', 'anggaran', 'unitkerjas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
