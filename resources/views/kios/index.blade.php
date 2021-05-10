@extends('layouts.admin')
@section('content')

  	<div class="container">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">No</th>
			  <th scope="col">Nama Kios</th>
			  <th scope="col">Pemilik Kios</th>
			  <th scope="col">Verified </th>
			  <th scope="col">Tanggal Kontrak</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			@foreach ($kios as $item)
			<tr>
			  <th scope="row">{{$loop->iteration}}</th>
			  <td>{{$item->nama}}</td>
			  <td>{{$item->user_id}}</td>
			  <td>{{$item->verified}}</td>
			  <td>{{$item->tgl_kontrak}}</td>
			  <td><a href="{{url('/kios/'.$item->id.'/edit')}}" class="btn btn-success">Update</a>
				<a class="btn btn-danger">Delete</a>
			</td>
			
			</tr>
			@endforeach
		  </tbody>
		</table>
		
		<div class="d-flex ">
			<div class="ms-auto">
				<a href="/tambah-data" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
	  
	 </div>
	
	 @endsection