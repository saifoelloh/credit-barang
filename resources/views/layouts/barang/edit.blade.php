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
    <form role="form" action="{{route('barang.update', $barang->kode)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kodeBrg">Kode Barang</label>
                <input name="kode" type="text" class="form-control" id="kodeBrg" placeholder="Nama Barang" value="{{$barang->kode}}" required>
                <label for="nameBrg">Nama Barang</label>
                <input type="text" class="form-control" id="nameBrg" placeholder="Nama Barang" name="nama" value="{{$barang->nama}}" required>
                <label for="priceBrg">Harga</label>
                <input type="number" min="0.01" step="0.01" class="form-control" id="priceBrg" placeholder="Harga Barang" name="harga" value="{{$barang->harga}}" required>
                <label for="ammtBrg">Jumlah</label>
                <input type="number" class="form-control" id="ammtBrg" placeholder="Jumlah Barang" name="jumlah" value="{{$barang->jumlah}}" required>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop
