<?php

namespace App\Http\Controllers;
use App\Models\Kios;
use Illuminate\Http\Request;

class KiosController extends Controller
{
    public function index()
    {
        $kios = Kios::all();
        
        return view('kios.index', compact('kios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kios.create');
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
            'nama'        => 'required', 

            ]);
        $kios = new Kios;
        $kios -> nama = $request->nama;
        $kios -> user_id = 1500;
        $kios -> password = 'admin';
        $kios -> tgl_kontrak = null;
        $kios -> save();

        $kios = Kios::all();
        
        return view('kios.index', compact('kios'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function show(Kios $kios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function edit(Kios $kios)
    {
        return view('kios.edit',['kios'=>$kios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kios $kios)
    {
        $validateData = $request->validate([
            'nama'        => 'required', 
   
            ]);

        $kios->where('id',$kios->id)->update([
            'nama' => $request->nama,

        ]);

        $kios = Kios::all();
        
        return view('kios.index',compact('kios'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kios $kios)
    {
        $kios->delete();
        
        return back();
    }
}
