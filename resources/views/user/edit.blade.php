    @extends('layouts.admin')
    @section('content')
        


      
              <div class="card">
                <div class="card-body">
                  <div class="m-sm-4">
                    <form action="{{ url('user/'.$users->id) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH');
                        @csrf
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
                          <label class="form-label">NIK</label>
                          <input class="form-control form-control-lg" value="{{$users->nik}}" type="text" name="nik" placeholder="Masukkan NIK" required/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input class="form-control form-control-lg" type="text" value="{{$users->nama}}" name="nama" placeholder="Masukkan Nama"required />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input class="form-control form-control-lg" type="text" value="{{$users->hp}}" name="hp" placeholder="Masukkan No HP" required/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email" value="{{$users->email}}" name="email" placeholder="Masukkan Email" required/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input class="form-control form-control-lg" type="text" value="{{$users->alamat}}" name="alamat" placeholder="Masukkan Alamat" required/>
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
      
            </div>
          </div>
        </div>
      </div>
      @endsection
