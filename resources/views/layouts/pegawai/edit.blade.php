@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Pegawai<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-primary" 
                onclick="window.location.href='/admin/pegawai/'">
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
                <label for="pegName">Nama Pegawai</label>
                <input type="text" class="form-control" id="pegName" placeholder="Nama Terang Pegawai">
                <label for="pegEmail">Email</label>
                <input type="text" class="form-control" id="pegEmail" placeholder="Email Aktif Pegawai">
                <label for="pegAlmt">Alamat</label>
                <input type="text" class="form-control" id="pegAlmt" placeholder="Alamat Jelas Pegawai">
                <label for="pegTelp">Nomor Telepon</label>
                <input type="text" class="form-control" id="pegTelp" placeholder="Nomor Telepon Aktif">
            </div>
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop