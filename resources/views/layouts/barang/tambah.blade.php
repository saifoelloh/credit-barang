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
    <form role="form" action={{route('barang.store')}} method="POST">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kodeBrg">Kode Barang</label>
                <input name="kode" type="text" class="form-control" id="kodeBrg" placeholder="Nama Barang" required>
                <label for="nameBrg">Nama Barang</label>
                <input name="nama" type="text" class="form-control" id="nameBrg" placeholder="Nama Barang" required>
                <label for="priceBrg">Harga</label>
                <input name="harga" type="number" min="0.01" step="0.01" class="form-control" id="priceBrg" placeholder="Harga Barang" required>
                <label for="ammtBrg">Jumlah</label>
                <input name="jumlah" type="number" class="form-control" id="ammtBrg" placeholder="Jumlah Barang" required>
                <label for="distrib">Distributor</label>
                <select name="distrib" class="form-control" id="distrib" style="width: 100%;">
                  @foreach($distributors as $distrib)
                    <option value="{{$distrib->id}}" >
                        {{$distrib->nama}}
                    </option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
@stop
