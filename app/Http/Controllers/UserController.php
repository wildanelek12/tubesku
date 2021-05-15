<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Kios;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
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
            'nik'        => 'required', 
            'nama'         => 'required',     
            'hp'         => 'required',   
            'email'         => 'required',  
            'alamat'         => 'required',     
            ]);
         
         $extFile=$request->ktp->getClientOriginalExtension();
         $namaFile='ktp'.$request->nama.time().'.'.$extFile;
         $path = $request->ktp->storeAs('ktp',$namaFile);
     
        
         $user = new User;
        $user -> nik = $request->get('nik');
        $user -> nama = $request->get('nama');
        $user -> hp = $request->get('hp');
        $user -> email = $request->get('email');
        $user -> alamat = $request->get('alamat');
         $user -> ktp = $path;
        $user->save(); // Finally, save the record.

        $kios_id_now = Auth::user()->id;
        Kios::where('id',$kios_id_now)->update(['user_id'=>$user->id,'verified'=>'waiting']);

        return view('confirm_page');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kios  $kios
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        $user = User::all();
        
        return back();
    }
}
