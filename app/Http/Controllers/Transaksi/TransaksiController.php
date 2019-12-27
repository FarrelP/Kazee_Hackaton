<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Transaksi;

class TransaksiController extends Controller
{
    public function index() 
    {
    	$ret_Transaksi['transaksi'] = DB::table('transaksi')
    		->join('pembeli', 'transaksi.id_pembeli', '=', 'pembeli.id_pembeli')
            ->join('barang', 'transaksi.id_barang', '=', 'barang.id_barang')
            ->select('transaksi.id_transaksi', 'pembeli.nama_pembeli', 'barang.nama_barang')
    		->get();

    	return view('app.transaksi.transaksi')->with($ret_Transaksi);
    }

    public function tambah()
    {
        $ret_Pembeli['pembeli'] = DB::table('pembeli')->get();
        $ret_Barang['barang'] = DB::table('barang')->get();

    	return view('app.transaksi.tambah-transaksi')->with($ret_Pembeli)->with($ret_Barang);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_pembeli' => 'required',
            'id_barang' => 'required',
            'tanggal' => 'required'
        ]);
 
        Transaksi::create([
            'id_pembeli' => $request->id_pembeli,
            'id_barang' => $request->id_barang,
            'tanggal' => $request->tanggal
        ]);
 
        return redirect('/transaksi');
    }

    public function hapus($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('/transaksi');
    }
}
