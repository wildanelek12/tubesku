@extends('layouts.admin')

@section('content')


<div class="row">
	<div class="col-12 col-xl-12">
		<div class="card">
			<div class="card-header">
				<h1>Managemen KIOS</h5>
					<div class="ml-auto">
						<a href="/kios/create"class="btn btn-md btn-primary">Tambah Kios </a>
					</div>
			</div>
	
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th >Nama Kios</th>
						<th>Nama Pemilik</th>
						<th>Tanggal Kontrak</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($kios as $item)
					<tr>
						<td>{{$item->nama}}</td>
						<td>{{$item->user->nama}}</td>
						<td>{{$item->tgl_kontrak}}</td>

						
						<td class="table-action">
							<a href="{{url('kios/'.$item->id.'/edit')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
							<a href="#" class="btn-delete" data-toggle="modal" data-target="#delete-modal" data-kios-id="{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
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

		$(document).ready( function () {
    		$('#myTable').DataTable();
		} );

	</script>
	
@endpush