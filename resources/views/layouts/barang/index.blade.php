@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Barang</h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-info"
                onclick="window.location.href='/admin/barang/add'">
                Tambah Barang
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
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Pegawai</th>
                            <th>Distributor</th>
                            <th>Tindakan</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ticket VIP Gfriend</td>
                            <td>1.500.000</td>
                            <td>5</td>
                            <td>saipul jamil</td>
                            <td>PT Astrindo</td>
                            <td><button type="button" class="btn btn-primary btn-xs" onclick="window.location.href='/admin/barang/edit'">Edit</button>
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