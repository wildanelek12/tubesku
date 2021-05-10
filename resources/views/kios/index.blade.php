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
			  <td>
			  	<a href="{{url('/kios/'.$item->id.'/edit')}}" class="btn btn-success">Update</a>
					<button type="button" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-delete" data-kios-id="{{ $item->id }}">Delete</button>
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

	<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title font-weight-bold text-danger">Warning</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Are you sure to delete this post?</p>
	      </div>
	      <div class="modal-footer">
	        <form id="delete-form" method="POST">
	            @csrf
	            @method('DELETE')

	            <button class="btn btn-danger">Sure</button>
	        </form>

	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	
@endsection

@push('custom_scripts')
  <script type="text/javascript">
		$(document).on('click', '.btn-delete', function () {
	    var _id = $(this).data('kios-id');
	    $('#delete-form').attr('action', '/kios/' + _id);
		});
	</script>
@endpush