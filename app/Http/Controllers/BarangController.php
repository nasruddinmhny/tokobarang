<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){

        $barang = Barang::all();

        return View ('barang.index', compact('barang'));

    }

    public function create(){

        return view('barang.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'namabarang' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
        ]);
        //dd($request->all());
        Barang::create($request->all());

        return redirect('/barang');
    }

    public function edit($id){
        //dd($id);
        //dd("tes");
        $barang = Barang::find($id);
        return view('barang.edit', compact(['barang']));
    }

    public function update(Request $request, $id){

        //dd($request->all());
        $barang = Barang::find($id);
        $barang->update($request->all());

        return redirect('/barang');
    }

    public function destroy($id){

        //dd($id);
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barang');
    }


}
