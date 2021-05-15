<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Kios;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{

    public function index()
    {   
        $pembayarans = Pembayaran::where('verified',0)->simplePaginate(5); 
        $kiosKosong = Kios::where('verified','belum')->count();   
        $kiosTerisi = Kios::where('verified','sukses')->count();          
        $users = Kios::where('verified','waiting')->simplePaginate(5); 

        return view('dashboard', ['pembayarans'=>$pembayarans,'kiosKosong'=>$kiosKosong,'kiosTerisi'=>$kiosTerisi,'users'=>$users]);
        //  return view('dashboard_user', ['pembayarans'=>$pembayarans]);
    }
    public function accPembayaran(Pembayaran $pembayaran)
    {
        $pembayaran->where('id',$pembayaran->id)->update(['verified'=>1]);
        $pembayarans = Pembayaran::all();
        
        return back();
    }
    public function accKios(Kios $kios)
    {
        $kios->where('id',$kios->id)->update(['verified'=>'sukses']);
        $kios = Kios::all();
        
        return back();
    }
}
