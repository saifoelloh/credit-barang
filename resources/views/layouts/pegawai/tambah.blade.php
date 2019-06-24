@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Pegawai<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('pegawai')}}>
                Kembali
            </a>
        </h3>
    </div>
</div>
@stop

@section('content')
<div class="box box-info">
    <form role="form" action={{route('pegawai.store')}} method="post">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="pegName">Nama Pegawai</label>
                <input type="text" name="name" class="form-control" id="pegName" required placeholder="Nama Terang Pegawai">
                <label for="pegEmail">Email</label>
                <input type="email" name="email" class="form-control" id="pegEmail" required placeholder="Email Aktif Pegawai">
                <label for="pegAlmt">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="pegAlmt" required placeholder="Alamat Jelas Pegawai">
                <label for="pegTelp">Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control" id="pegTelp" required placeholder="Nomor Telepon Aktif">
                <label for="pegTelp">Password</label>
                <input type="password" name="password" class="form-control" id="pegTelp" required placeholder="xxxxxx">
            </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
@stop
