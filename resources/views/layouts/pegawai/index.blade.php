@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Pegawai</h1>
@stop

@section('content')
<div class="row">
<div class="col-md-8">
<div class="box box-info">
<div class="box-body">
<table class="data-table table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
        </tr>
    <thead>
    <tbody>
        <tr>
            <td>Saipul Jamil</td>
            <td>Tlogosari Permai</td>
            <td>087888772973</td>
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