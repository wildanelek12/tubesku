
   @extends('layouts.user')
   @section('content')
       

   <div class="container">
        <form action="{{route('barang.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="namaBarang" name="nama" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="hargaBarang">Harga Barang</label>
                <input type="number" class="form-control" id="hargaBarang" name="harga"placeholder="Harga Barang">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
    @endsection