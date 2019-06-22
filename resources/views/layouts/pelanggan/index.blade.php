@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Pelanggan</h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-primary" 
                onclick="window.location.href='/admin/pelanggan/add'">
                Tambah Pelanggan
            </button>
        </h3>
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
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Pegawai</th>
                            <th>Tindakan</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <td>Aduhai</td>
                            <td>Tlogosari Raya</td>
                            <td>08512349182</td>
                            <td>Saipul Jamil</td>
                            <td><button type="button" class="btn btn-info btn-xs" onclick="window.location.href='/admin/pelanggan/edit'">Edit</button>
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