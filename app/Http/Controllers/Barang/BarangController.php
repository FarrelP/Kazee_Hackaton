<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Barang;

class BarangController extends Controller
{
    public function index() 
    {
    	$ret['barang'] = DB::table('barang')->get();

    	return view('app.barang.barang')->with($ret);
    }

    public function tambah()
    {
    	return view('app.barang.tambah-barang');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_barang' => 'required',
    		'harga_barang' => 'required'
    	]);
 
        Barang::create([
    		'nama_barang' => $request->nama_barang,
    		'harga_barang' => $request->harga_barang
    	]);
 
    	return redirect('/barang');
    }

    public function hapus($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barang');
    }

    public function edit($id)
    {
        $ret['barang'] = DB::table('barang')
            ->select(DB::raw('*'))
            ->where('id_barang', $id)
            ->get();

        return view('app.barang.update-barang')->with($ret);
    }

    public function update(Request $request)
    {
        DB::table('barang')->where('nama_barang',$request->nama_barang)->update([
            'harga_barang' => $request->harga_barang
        ]);
 
        return redirect('/barang');
    }
}
