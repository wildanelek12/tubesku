	@extends('layouts.admin')
	@section('content')
		

	<div class="row">
		<div class="col-12 col-xl-12">
			<div class="card">
				<div class="card-header">
					<h1>Pembayaran</h1>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>KIOS</th>
							<th>BULAN</th>
							<th>TANGGAL BAYAR</th>
							<th>BUKTI</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($pembayarans as $item)				
							<tr>
								<td>{{$item->kios_id}}</td>
								<td>{{$item->bulan}}</td>
								<td>{{$item->tgl_pembayaran}}</td>
								<td><a class="btn btn-info">lihat Bukti</td>							
								

							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>	
	</div>
	 @endsection
 