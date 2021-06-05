
   @extends('layouts.user')
   @section('content')
       

   <div class="container">
        <form action="{{url('proses-user')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="namaBarang" name="nama" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="hargaBarang">Harga Barang</label>
                <input type="number" class="form-control" id="hargaBarang" name="harga"placeholder="Harga Barang">
            </div>
            <div class="mb-3">
                <label class="form-label">Bulan</label>
                <select class="custom-select" name="kategori">
                    <option value="Elektronik">Elektronik</option>
                    <option value="Sayuran">Sayuran</option>
                    <option value="Acessoris">Acessoris</option>
                    <option value="Alat Rumah Tangga">Alat Rumah Tangga</option>    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
    @endsection