@extends('layouts.user')
@section('content')


    
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Riwayat Pendaftaran</h5>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >Bulan</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayarans as $item)
                        
                    
                    <tr>
                        <td>{{$item->bulan}}</td>
                        <td>{{$item->tgl_pembayaran}}</td>
                        <td><a href="#" class="btn btn-info btn-see-detail" data-toggle="modal" data-target="#see-detail-modal" data-kios="{{ asset('/app/'.$item->bukti) }}">lihat Bukti</a></td>
             
                    </tr>
                    @endforeach
                   
                </tbody>
            
            </table>
            {{$pembayarans->links()}} 
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
  

  
  @push('custom_scripts')
      <script type="text/javascript">
          $(document).on('click', '.btn-see-detail', function () {
              var data = $(this).data('kios');
              $('#img-detail').attr('src', data);
          });
      </script>
  @endpush
  

   

 @endsection
