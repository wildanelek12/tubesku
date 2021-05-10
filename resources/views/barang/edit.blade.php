    @extends('layouts.admin')
    @section('content')
        

        <div class="container">
        <form action="{{url('/barang/'.$barang->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="namaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="namaBarang" name="nama" value="{{$barang->nama}}" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="hargaBarang">Harga Barang</label>
                <input type="number" class="form-control" id="hargaBarang" value="{{$barang->harga}}" name="harga"placeholder="Harga Barang">
            </div>

            <div class="form-group">
                    <label for="select">Select:</label>
                    <select name="kios_id" id="select">
                        @foreach ($kios as $item)  
                            <option value="{{$item->id}}" {{$item->id==$barang->kios_id?'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                    </select>
            
            </div>             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	  </div>
      @endsection
