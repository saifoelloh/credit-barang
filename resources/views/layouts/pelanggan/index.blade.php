@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Pelanggan</h1>
@stop

@section('content')
<div class="row">
<div class="col-md-8">
<div class="box box-info">
<div class="box-body">
<table class="data-table">
    <thead>
        <tr>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Pegawai</th>
        </tr>
    <thead>
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