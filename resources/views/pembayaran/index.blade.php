	@extends('layouts.admin')
	@section('content')
		

  	<div class="container">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">No</th>
			  <th scope="col">Bulan</th>
			  <th scope="col">Pemilik</th>
			  <th scope="col">Tanggal Bayar</th>
			  <th scope="col">Bukti</th>
			  <th scope="col">Aksi</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach ($pembayarans as $item)
			<tr>
			  <th scope="row">{{$loop->iteration}}</th>
			  <td>{{$item->bulan}}</td>
			  <td>{{$item->kios_id}}</td>
			  <td>{{$item->tgl_pembayaran}}</td>
			  <td>{{$item->bukti}}</td>
			  <td><a href="{{url('/acc/'.$item->id)}}" class="btn btn-success">Acc</a>
				<a class="btn btn-danger">Delete</a>
			</td>
			
			</tr>
			@endforeach
		  </tbody>
		</table>
		
		<div class="d-flex ">
			<div class="ms-auto">
				<a href="/pembayaran/create" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
	  
	 </div>
	 @endsection
 