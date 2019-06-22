@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Tambah Pembelian<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-info" 
                onclick="window.location.href='/admin/pembelian/'">
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
                <label for="timeBuyr">Waktu</label>
                <!-- pakai datepicker.. ne ga waktu ne ilangi ae -->
                <input type="text" class="form-control" id="timeBuyr" placeholder="Waktu Pembelian Barang">
            </div>
            <div class="form-group">
                <label for="nameBury">Nama</label>
                <select class="form-control select2" id="nameBury" style="width: 100%;">
                  <option selected="selected">Nama Terang Pembeli</option>
                  <option>Amrin</option>
                  <option>Ipul</option>
                  <option>Udin</option>
                  <option>Ipan</option>
                  <option>Rijal</option>
                  <option>Apit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="thingsBuyr">Barang</label>
                <select class="form-control select2" id="thingsBuyr" style="width: 100%;">
                  <option selected="selected">Nama Barang yang Dibeli</option>
                  <option>Ticket GFriend</option>
                  <option>Steam Wallet 200k</option>
                  <option>Arcana Phantom Assasin</option>
                  <option>Converse All Star</option>
                  <option>Intel I9-9900K BOX</option>
                  <option>Cooler Master Hyper 212 EVO</option>
                </select>
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
@stop