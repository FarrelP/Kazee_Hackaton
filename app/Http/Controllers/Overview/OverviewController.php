<?php

namespace App\Http\Controllers\Overview;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Overview;

class OverviewController extends Controller
{
    public function index()
    {
   //  	$ret_Barang['barang'] = DB::table('barang')
			// ->select(DB::raw('nama_barang'))
   //  		->get();

    	$ret_CountBarang['jumlah_barang'] = DB::table('barang')
			->select(DB::raw('count(*) as jumlah'))
    		->get();

    	$ret_CountPembeli['jumlah_pembeli'] = DB::table('pembeli')
			->select(DB::raw('count(*) as jumlah'))
    		->get();

		$ret_CountTransaksi['jumlah_transaksi'] = DB::table('transaksi')
    		->select(DB::raw('count(*) as jumlah'))
    		->get();

    	return view('app.overview.overview')
    		// ->with($ret_Barang)
    		->with($ret_CountBarang)
    		->with($ret_CountPembeli)
    		->with($ret_CountTransaksi);
    }
}