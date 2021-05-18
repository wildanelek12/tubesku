<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Kios;
use App\Models\Barang;
use App\Models\Pembayaran;

use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function createDashboard()
    {
        $kios_id_now = Auth::user()->id;
        $pembayarans = Pembayaran::where('kios_id',$kios_id_now)->simplePaginate(5);     

        // return view('dashboard_user', ['users' =>$users,'pembayarans'=>$pembayarans,'kiosKosong'=>$kiosKosong,'kiosTerisi'=>$kiosTerisi]);
         return view('dashboard_user', ['pembayarans'=>$pembayarans]);
    }
    public function createTambahPembayaran()
    {
        return view('user_pembayaran.create');
    }
    public function createTambahBarang()
    {
        return view('barang.create');
    }
    public function createLihatBarang()
    {
        $kios_id_now = Auth::user()->id;
        $barangs = Barang::Where('kios_id',$kios_id_now)->get();
        return view('barang.index',compact('barangs'));
    }
    public function prosesBayarUser(Request $request)
    {
             
        $validateData = $request->validate([
            'bulan'        => 'required', 
            'bukti'         => 'required'         
            ]);
         $kios_id_now = Auth::user()->nama;
         
         $extFile=$request->bukti->getClientOriginalExtension();
         $namaFile=$kios_id_now.time().'.'.$extFile;
         $path = $request->bukti->storeAs('bukti',$namaFile);
     

         $pembayaran = new Pembayaran;
        $pembayaran -> bulan = $request->get('bulan');
         $pembayaran -> kios_id = Auth::user()->id;  
         $pembayaran -> tgl_pembayaran = \Carbon\Carbon::now();
        $pembayaran ->bukti = $path;
        $pembayaran->save(); // Finally, save the record.
        return back();
    }
    

}
