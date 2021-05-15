@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Kios Kosong</h5>
                            <h1 class="mt-1 mb-3">{{$kiosKosong}}</h1>
                            <div class="mb-1">
                                <span class="text-muted">ada {{$kiosKosong}} Kios kosong </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Kios Terisi</h5>
                            <h1 class="mt-1 mb-3">{{$kiosTerisi}}</h1>
                            <div class="mb-1">
                                <span class="text-muted">ada {{$kiosTerisi}} Kios Terisi</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 >Pembayaran </h5>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >Bulan</th>
                        <th>Nama</th>
                        <th>Tanggal Bayar</th>
                        <th>Bukti</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayarans as $item)
                        
                    
                    <tr>
                        <td>{{$item->bulan}}</td>
                        <td>{{$item->kios_id}}</td>
                        <td>{{$item->tgl_pembayaran}}</td>
                        <td><a class="btn btn-info">lihat Bukti</td>
                        <td><a href="{{url('/acc/'.$item->id)}}"class="btn btn-success">Konfirmasi</td>	
             
                    </tr>
                    @endforeach
                   
                </tbody>
            
            </table>
            {{$pembayarans->links()}} 
        </div>
    </div>	
</div>

<div class="row">
	<div class="col-12 col-xl-12">
		<div class="card">
			<div class="card-header">
				<h1>Akun</h1>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th >Nama Kios</th>
						<th>Nama Pemilik</th>
						<th>Tanggal Kontrak</th>
                        <th>KTP</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $item)
					<tr>
						<td>{{$item->nama}}</td>
						<td>{{$item->user_id}}</td>
						<td>{{$item->tgl_kontrak}}</td>
                        <td><a class="btn btn-info">Lihat KTP</td>	
						
                            <td><a href="{{url('/accKios/'.$item->id)}}"class="btn btn-success">Konfirmasi</td>	
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>	
</div>

   

 @endsection
