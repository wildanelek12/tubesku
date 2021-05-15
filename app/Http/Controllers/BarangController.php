<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kios;
use Illuminate\Http\Request;
use Auth;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        
        return view('barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kios = Kios::all();
        return view('barang.create',compact('kios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
           'nama'         => 'required',
           'harga'        => 'required',

        ]);

        $kios_id_now = Auth::user()->id;
        $barang = new Barang;
        $barang-> nama = $request->get('nama');
        $barang -> harga = $request->get('harga');
        $barang ->kios_id = $kios_id_now;
        $barang->save(); // Finally, save the record.
        return back();
        
    }

    /**
     * Display the specified resource.
     *                                                                                                             
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        $kios = Kios::all();
        return view(('barang.edit'),['barang' =>$barang,'kios'=>$kios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validateData = $request->validate([
            'nama'         => 'required',
            'harga'        => 'required',
 
         ]);

         
         Barang::where('id',$barang->id)->update($validateData);
         $barang->update($validateData);
         $barangs = Barang::all();
         return redirect('/lihat-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        $barangs = Barang::all();
        return view('barang.index',compact('barangs'));
    }
}
