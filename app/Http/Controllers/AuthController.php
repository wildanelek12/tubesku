<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Kios;

class AuthController extends Controller
{
  public function showFormLogin()
  {
    if (Auth::check()) {
      if (Auth::user()->role == 'admin') {
        return redirect()->route('dashboard');
      } else if (Auth::user()->role == 'user') {
        return redirect()->route('dashboard_user');
      }
    }
    return view('login');
  }

  public function login(Request $request)
  {
    $rules = [
      'nama'                 => 'required',
      'password'              => 'required'
    ];

    $messages = [
      'nama.required'        => 'Username wajib diisi',
      'password.required'     => 'Password wajib diisi'
    ];


    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()){
      return redirect()->back()->withErrors($validator)->withInput($request->all);
    }

    $data = [
      'nama'     => $request->input('nama'),
      'password'  => $request->input('password'),
    ];

    Auth::attempt($data);

    if (Auth::check()) { 
      if (Auth::user()->role == 'admin') {
        return redirect()->route('dashboard');
      } else if (Auth::user()->role == 'user') {
        return redirect()->route('dashboard_user');
      }
    }else {
      Session::flash('error', 'Username atau password salah');
      return redirect()->route('login');
    }

  }

  public function showFormRegister()
  {
    return view('register');
  }

  public function register(Request $request)
  {
    $rules = [
      'nama'                  => 'required|min:3|max:35|unique:kios,nama',
      'password'              => 'required|confirmed'
    ];

    $messages = [
      'nama.required'         => 'Username wajib diisi',
      'nama.min'              => 'Username minimal 3 karakter',
      'nama.max'              => 'Username maksimal 35 karakter',
      'nama.unique'           => 'Username sudah terdaftar',
      'password.required'     => 'Password wajib diisi',
      'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()){
      return redirect()->back()->withErrors($validator)->withInput($request->all);
    }

    $kios = new Kios;
    $kios->user_id = 1;
    $kios->tgl_kontrak = \Carbon\Carbon::now();
    $kios->nama = ucwords(strtolower($request->nama));
    $kios->password = Hash::make($request->password);
    $simpan = $kios->save();

    if($simpan){
      Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
      return redirect()->route('login');
    } else {
      Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
      return redirect()->route('register');
    }
  }

  public function logout()
  {
    Auth::logout(); // menghapus session yang aktif
    return redirect()->route('login');
  }
}
