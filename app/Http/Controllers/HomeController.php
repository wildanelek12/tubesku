<?php

namespace App\Http\Controllers;
use App\Models\Kios;
use App\Models\Barang;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kios = Kios::all();
        $barangs = new Barang;
        return view('index',['kios'=>$kios,'barangs'=>$barangs]);
    }
    public function show(Kios $kios)
    {
        echo json_encode($kios->barangs);
    }
}
