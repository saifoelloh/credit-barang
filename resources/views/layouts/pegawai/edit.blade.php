@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Pegawai<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-primary" href={{route('pegawai')}}>
                Kembali
            </a>
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
                <input type="text" value={{$user->name}} name="name" class="form-control" id="pegName" required placeholder="Nama Terang Pegawai">
                <label for="pegEmail">Email</label>
                <input type="email" value={{$user->email}} name="email" class="form-control" id="pegEmail" required placeholder="Email Aktif Pegawai">
                <label for="pegAlmt">Alamat</label>
                <input type="text" value={{$user->alamat}} name="alamat" class="form-control" id="pegAlmt" required placeholder="Alamat Jelas Pegawai">
                <label for="pegTelp">Nomor Telepon</label>
                <input type="text" value={{$user->no_telp}} name="no_telp" class="form-control" id="pegTelp" required placeholder="Nomor Telepon Aktif">
                <label for="pegTelp">Password</label>
                <input type="password" name="password" class="form-control" id="pegTelp" required placeholder="xxxxxx">
            </div>
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop
