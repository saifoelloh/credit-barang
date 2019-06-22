@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Pelanggan<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-primary"
                onclick="window.location.href='/admin/pelanggan/'">
                Kembali
            </button>
        </h3>
    </div>
</div>
@stop

@section('content')
    <div class="box box-primary">
        <form role="form" action={{route('custommer.update', $custommer->id)}} method="post">
            @method("PUT")
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" name="nama" value="{{ $custommer->nama }}" class="form-control" id="nama" placeholder="Nama Terang Pelanggan">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" value="{{ $custommer->alamat }}" class="form-control" id="alamat" placeholder="Alamat Pelanggan Saat Ini">
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telp</label>
                    <input type="text" name="no_telp" value="{{ $custommer->no_telp }}" class="form-control" id="no_telp" placeholder="Nomor Telepon Yang Dapat Dihubungi">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop
