<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	
	
  </head>
  <body>
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

            <div class="form-group">
                    <label for="select">Select:</label>
                    <select name="kios_id" id="select">
                        @foreach ($kios as $item)  
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
            
            </div>             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            
	
	
	  </div>
<!-- body code goes here -->


  </body>
</html>