@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Pelanggan<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-info" 
                onclick="window.location.href='/admin/pelanggan/'">
                Kembali
            </button>
        </h3>
    </div>
</div>
@stop

@section('content')
    <div class="box box-info">
        <form role="form">
            <div class="box-body">
            <div class="form-group">
                <label for="nameCust">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nameCust" placeholder="Nama Terang Pelanggan">
            </div>
            <div class="form-group">
                <label for="addrCust">Alamat</label>
                <input type="text" class="form-control" id="addrCust" placeholder="Alamat Pelanggan Saat Ini">
            </div>
            <div class="form-group">
                <label for="phoneCust">Nomor Telp</label>
                <input type="text" class="form-control" id="phoneCust" placeholder="Nomor Telepon Yang Dapat Dihubungi">
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
@stop