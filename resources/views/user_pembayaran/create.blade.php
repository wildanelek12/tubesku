
   @extends('layouts.user')
   @section('content')
       

   <div class="container d-flex flex-column">
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell ">

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <form action="/prosesbayar-user" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Bulan</label>
                                    <select class="custom-select" name="bulan">
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="bukti" required>
                                        <label class="custom-file-label" for="customFile">Pilih Bukti Pembayaran</label>
                                      </div>

                                </div>
                    
                                <div class=" mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">Kirim</a>
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
    @endsection