<?php

namespace App\Http\Controllers\Pembeli;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Pembeli;

class PembeliController extends Controller
{
    public function index() 
    {
    	$ret['pembeli'] = DB::table('pembeli')->get();

    	return view('app.pembeli.pembeli')->with($ret);
    }

    public function tambah()
    {
    	return view('app.pembeli.tambah-pembeli');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_pembeli' => 'required',
    		'telepon' => 'required',
    		'alamat' => 'required'
    	]);
 
        Pembeli::create([
    		'nama_pembeli' => $request->nama_pembeli,
    		'telepon' => $request->telepon,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/pembeli');
    }

    public function hapus($id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();

        return redirect('/pembeli');
    }

    public function edit($id)
    {
        $ret['pembeli'] = DB::table('pembeli')
            ->select(DB::raw('*'))
            ->where('id_pembeli', $id)
            ->get();

        return view('app.pembeli.update-pembeli')->with($ret);
    }

    public function update(Request $request)
    {
        DB::table('pembeli')->where('nama_pembeli',$request->nama_pembeli)->update([
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ]);
 
        return redirect('/pembeli');
    }
}
