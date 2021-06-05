	@extends('layouts.user')
	@section('content')
		

	<div class="row">
		<div class="col-12 col-xl-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Barang</h5>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th >No</th>
							<th >Nama Barang</th>
							<th >Harga</th>
							<th >Kategori</th>
							<th >Action</th>
						</tr>
					</thead>
					<tbody>
							
						@foreach ($barangs as $item)
						<tr>
						  <td scope="row">{{$loop->iteration}}</td>
						  <td>{{$item->nama}}</td>
						  <td>Rp.{{$item->harga}}</td>
						  <td>{{$item->kategori}}</td>
						  <td>	<a href="{{url('/barang/'.$item->id.'/edit')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>

						</td>
						
						</tr>
						@endforeach
					   
					</tbody>
				
				</table>
			</div>
		</div>	
	</div>
	<div class="d-flex ">
		<div class="ms-auto">
			<a href="/barang-user" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	 @endsection
 