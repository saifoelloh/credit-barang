@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Distributor<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('distributor')}}>
                Kembali
            </a>
        </h3>
    </div>
</div>
@stop

@section('content')
<div class="box box-info">
    <form role="form" action={{route('distributor.store')}} method="post">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="nameDistrb">Nama Distributor</label>
                <input type="text" name="nama" class="form-control" id="nameDistrb" placeholder="Nama Distributor">
                <label for="addrDistrb">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="addrDistrb" placeholder="Alamat Jelas Distributor">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
@stop
