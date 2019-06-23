@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Barang<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-info" 
                onclick="window.location.href='/admin/barang/'">
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
                <label for="nameBrg">Nama Barang</label>
                <input type="text" class="form-control" id="nameBrg" placeholder="Nama Barang" required>
                <label for="priceBrg">Harga</label>
                <input type="number" min="0.01" step="0.01" class="form-control" id="priceBrg" placeholder="Harga Barang" required>
                <label for="ammtBrg">Jumlah</label>
                <input type="number" class="form-control" id="ammtBrg" placeholder="Jumlah Barang" required>
                <label for="pgwiBrg">Pegawai</label>
                <select class="form-control select2" id="pgwiBrg" style="width: 100%;">
                  <option selected="selected" disabled="disabled">Pegawai Input Barang</option>
                  <option>Amrin</option>
                  <option>Saipul Jamil</option>
                  <option>Udin</option>
                  <option>Ipan</option>
                  <option>Rijal</option>
                  <option>Apit</option>
                </select>
                <label for="distbBrg">Distributor</label>
                <select class="form-control select2" id="distbBrg" style="width: 100%;">
                  <option selected="selected" disabled="disabled">Distributor Barang</option>
                  <option>PT Astrindo</option>
                  <option>Tirta Air Modeal</option>
                  <option>Bintang Sinar Sentosa</option>
                  <option>Raja Besi</option>
                  <option>Valve Corporation</option>
                  <option>Bunga Cipta Komputer</option>
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
@stop