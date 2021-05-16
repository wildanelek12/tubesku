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
                        <th>Bulan</th>
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
                        <td>{{$item->kios->nama}}</td>
                        <td>{{$item->tgl_pembayaran}}</td>
                        <td><a href="#" class="btn btn-info btn-see-detail" data-toggle="modal" data-target="#see-detail-modal" data-kios="{{ asset('/app/'.$item->bukti) }}">lihat Bukti</a></td>
                        <td><a href="{{url('/acc/'.$item->id)}}"class="btn btn-success">Konfirmasi</a></td>
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
						<th>Nama Kios</th>
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
						<td>{{$item->user->nama}}</td>
						<td>{{$item->tgl_kontrak}}</td>
                        <td><a href="#" class="btn btn-info btn-see-detail" data-toggle="modal" data-target="#see-detail-modal" data-kios="{{ asset('/app/'.$item->user->ktp) }}">lihat KTP</a></td>	
						<td><a href="{{url('/accKios/'.$item->id)}}"class="btn btn-success">Konfirmasi</a></td>	
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>	
</div>

<div class="modal fade" id="see-detail-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold text-success">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="img-detail" class="w-100">
      </div>
    </div>
  </div>
</div>   

@endsection

@push('custom_scripts')
    <script type="text/javascript">
        $(document).on('click', '.btn-see-detail', function () {
            var data = $(this).data('kios');
            $('#img-detail').attr('src', data);
        });
    </script>
@endpush
