@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Pegawai<h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <button type="button" class="btn btn-info" 
                onclick="window.location.href='/admin/pegawai/add'">
                Tambah Pegawai
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
                            <th class="text-center">Id</th>
                            <th class="text-center">Nama Pegawai</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Nomor Telepon</th>
                            <th class="text-center">Tindakan</th>
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
            $('.data-table').dataTable({
                data: {!! $users !!},
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'alamat'},
                    {data: 'no_telp'},
                    {
                        data: 'id',
                        render: function(data) {
                            const link = 'http://localhost:8000/admin/pegawai/'+data;
                            const detail = '<a class="btn btn-primary btn-xs" style="margin: 0 3px" href="/admin/pegawai/'+data+'">edit</a>';
                            const hapus = '<form role="form" action="'+link+'" style="margin: 0 3px;display: inline" method="POST">@method("DELETE")@csrf<button class="btn btn-danger btn-xs">delete</button></form>';
                            return '<div class="text-center">'+detail+hapus+'</div>';
                        }
                    },
                ]
            });
        });
    </script>
@stop
