	@extends('layouts.admin')
	@section('content')
		

  	<div class="container">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">No</th>
			  <th scope="col">Nama Barang</th>
			  <th scope="col">Harga</th>
			  <th scope="col">Pemilik Kios</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach ($barangs as $item)
			<tr>
			  <th scope="row">{{$loop->iteration}}</th>
			  <td>{{$item->nama}}</td>
			  <td>{{$item->harga}}</td>
			  <td>{{$item->kios->nama}}</td>
			  <td><a href="{{url('/barang/'.$item->id.'/edit')}}" class="btn btn-success">Update</a>
				<a class="btn btn-danger">Delete</a>
			</td>
			
			</tr>
			@endforeach
		  </tbody>
		</table>
		
		<div class="d-flex ">
			<div class="ms-auto">
				<a href="/barang/create" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
	  
	 </div>
	 @endsection
 