<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="{{asset('template')}}/css/app.css" rel="stylesheet">
  </head>
<body>
  <div class="container d-flex flex-column">
    <div class="row vh-100">
      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

  
          <div class="card">
            <div class="card-body">
              <div class="m-sm-4">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
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
                      <input class="form-control form-control-lg" type="number" name="nik" placeholder="Masukkan NIK" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input class="form-control form-control-lg" type="text" name="nama" placeholder="Masukkan Nama"required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input class="form-control form-control-lg" type="text" name="hp" placeholder="Masukkan No HP" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan Email" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input class="form-control form-control-lg" type="text" name="alamat" placeholder="Masukkan Alamat" required/>
                  </div>
                  <div class="mb-3">
                    <div class="custom-file">
                      <label for="formFile" class="form-label" >Pilih File KTP</label>
                      <input class="form-control" type="file" id="formFile" name="ktp">
                  </div>
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
</body>
</html>

