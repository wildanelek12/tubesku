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
                        <td><a class="btn btn-info">lihat Bukti</td>		
             
                    </tr>
                    @endforeach
                   
                </tbody>
            
            </table>
            {{$pembayarans->links()}} 
        </div>
    </div>	
</div>




   

 @endsection
