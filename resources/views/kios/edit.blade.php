@extends('layouts.admin')
@section('content')
    


  
          <div class="card">
            <div class="card-body">
              <div class="m-sm-4">
                <form action="{{ url('kios/'.$kios->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                  <div class="card-body">
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Something it's wrong:
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif                            
                   
                  <div class="mb-3">
                      <label class="form-label">Nama Kios</label>
                      <input class="form-control form-control-lg"  value ="{{$kios->nama}}"type="text" name="nama" placeholder="Masukkan Nama Kios" required/>
                  </div>
                  <div class="text-end mt-3">
                    <button  class="btn btn-lg btn-primary">Konfirmasi</button>
                    <button type="reset" class="btn btn-lg btn-danger">Reset</a>
                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
  

  @endsection
