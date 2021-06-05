<?php

namespace App\Http\Controllers;
use App\Models\Kios;
use App\Models\Barang;

use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
   public function index()
   {
    $kios = Kios::all();
    $barangs = Barang::all();

    return view('home',['kios'=>$kios,'barangs'=>$barangs]);
   }
}
