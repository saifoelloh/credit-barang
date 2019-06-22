@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Barang</h1>
@stop

@section('content')
<div class="row">
<div class="col-md-8">
<div class="box box-info">
<br>
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="harga" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="" placeholder="">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>
</div>
@stop