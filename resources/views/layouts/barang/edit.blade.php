@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Edit Informasi Barang<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-primary" 
                onclick="window.location.href='/admin/barang/'">
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
                    <label for="nameBrg">Nama Barang</label>
                    <input type="text" class="form-control" id="nameBrg" placeholder="Nama Barang" value="Ticket GFriend">
                    <label for="priceBrg">Harga</label>
                    <input type="number" min="0.01" step="0.01" class="form-control" id="priceBrg" placeholder="Harga Barang" value="1500000">
                    <label for="ammtBrg">Jumlah</label>
                    <input type="number" class="form-control" id="ammtBrg" placeholder="Jumlah Barang" value="5">
                    <label for="pgwiBrg">Pegawai</label>
                    <input type="text" class="form-control" id="pgwiBrg" placeholder="Pegawai Input Barang" value="saipul jamil">
                    <label for="distbBrg">Distributor</label>
                    <input type="text" class="form-control" id="distbBrg" placeholder="Distributor Barang" value="PT Astrindo">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@stop