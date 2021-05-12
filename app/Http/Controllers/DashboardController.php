<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $users = User::paginate(2);
        $pembayarans = Pembayaran::where('verified',0)->paginate(2);
    
        return view('dashboard', ['users' =>$users,'pembayarans'=>$pembayarans]);
        
    }
    public function accPembayaran(Pembayaran $pembayaran)
    {
        $pembayaran->where('id',$pembayaran->id)->update(['verified'=>1]);
        $pembayarans = Pembayaran::all();
        
        return view('pembayaran.index',compact('pembayarans'));
    }
}
