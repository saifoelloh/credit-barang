@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Informasi Distributor</h3>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">

            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Distributor</label>
                  <div class="col-sm-10">
                    <label class="col-sm-2 control-label">Nutekno</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <label class="col-sm-2 control-label text-left">Semarang</label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <!-- /.box-footer -->
            </div>

            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Distributor</th>
                            <th>Alamat</th>
                            <th>Tindakan</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PT Astrindo</td>
                            <td>Jakarta Utara</td>
                            <td>
                                <button type="button" class="btn btn-success btn-xs">Detail</button>
                                <button type="button" class="btn btn-primary btn-xs" onclick="window.location.href='/admin/distributor/edit'">Edit</button>
                                <button type="button" class="btn btn-danger btn-xs">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable();
        });
    </script>
@stop

