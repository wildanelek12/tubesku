@extends('layouts.admin')
@section('content')
    
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Striped Rows</h5>
                <h6 class="card-subtitle text-muted">Use <code>.table-striped</code> to add zebra-striping to any table row within the
                    <code>&lt;tbody&gt;</code>.</h6>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th >NIK</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>KTP</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        
                    
                    <tr>
                        <td>{{$item->nik}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->hp}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->alamat}}</td>
                        <td><a class="btn btn-info">lihat KTP</td>
                        <td><a class="btn btn-success">Konfirmasi</td>	
             
                    </tr>
                    @endforeach
                   
                </tbody>
            
            </table>
            {{$users->links()}} 
        </div>
    </div>	
</div>

    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Striped Rows</h5>
                    <h6 class="card-subtitle text-muted">Use <code>.table-striped</code> to add zebra-striping to any table row within the
                        <code>&lt;tbody&gt;</code>.</h6>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>KIOS</th>
                            <th>BULAN</th>
                            <th>TANGGAL BAYAR</th>
                            <th>BUKTI</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayarans as $item)				
                            <tr>
                                <td>{{$item->kios_id}}</td>
                                <td>{{$item->bulan}}</td>
                                <td>{{$item->tgl_pembayaran}}</td>
                                <td><a class="btn btn-info">lihat Bukti</td>							
                                <td><a class="btn btn-success">Konfirmasi</td>	
                            </tr>
                        
                        @endforeach
                
                    </tbody>
                    
                 
                </table>
            </div>
        </div>	
    </div>

 @endsection
