<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Models\Tpembelian;
use Illuminate\Http\Request;
use App\Models\Tpembelianbarang;
use App\Exports\TpembelianExport;

class TpembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpembelian = Tpembelian::all();
        return view('transaksi_pembelian.index', compact('tpembelian'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tpembelian  $Tpembelian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tpembelian = Tpembelian::find($id);

        return view('transaksi_pembelian.show', compact('tpembelian'));
    }
}