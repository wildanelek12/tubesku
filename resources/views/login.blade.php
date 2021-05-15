<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  
	<link href="{{asset('template')}}/css/app.css" rel="stylesheet">
</head>
<body>
  <div class="container">
  <div class="container d-flex flex-column">
    <div class="row vh-100">
      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

          <div class="text-center mt-4">
            <p class="lead">
              Masuk untuk melihat akunmu
            </p>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="m-sm-4">
                <div class="text-center">
                  <img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                </div>
                <form action="{{ route('login') }}" method="post">
                  @csrf
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
                  @if (Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                  @endif
                  @if (Session::has('error'))
                  <div class="alert alert-danger">
                    {{ Session::get('error') }}
                  </div>
                  @endif
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control form-control-lg" type="text" name="nama" placeholder="Masukkan Username" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan Password" />

                  </div>
                  <div class="text-start mt-3">
                    <button type="submit" class="btn btn-md btn-primary">Sign in</a>
                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
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