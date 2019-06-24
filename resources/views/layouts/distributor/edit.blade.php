@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Distributor<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-primary" href={{route('distributor')}}>
                Kembali
            </a>
        </h3>
    </div>
</div>
@stop

@section('content')
<div class="box box-primary">
    <form role="form" action={{route('distributor.update', $distributor->id)}} method="POST">
        @method('PUT')
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="nameDistrb">Nama Distributor</label>
                <input type="text" value={{$distributor->nama}} name="nama" class="form-control" id="nameDistrb" placeholder="Nama Distributor" value="PT Astrindo">
                <label for="addrDistrb">Alamat</label>
                <input type="text" value={{$distributor->alamat}} name="alamat" class="form-control" id="addrDistrb" placeholder="Alamat Jelas Distributor" value="Jakarta Selatan">
            </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop
