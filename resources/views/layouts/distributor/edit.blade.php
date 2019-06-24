@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Distributor<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-primary" 
                onclick="window.location.href='/admin/distributor/'">
                Kembali
            </button>
        </h3>
    </div>
</div>
@stop

@section('content')
<div class="box box-primary">
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="nameDistrb">Nama Distributor</label>
                <input type="text" class="form-control" id="nameDistrb" placeholder="Nama Distributor" value="PT Astrindo">
                <label for="addrDistrb">Alamat</label>
                <input type="text" class="form-control" id="addrDistrb" placeholder="Alamat Jelas Distributor" value="Jakarta Selatan">
            </div>
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop