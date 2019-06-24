@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Distributor</h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('distributor.create')}}>
                Tambah Distributor
            </a>
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
                            <td><button type="button" class="btn btn-primary btn-xs" onclick="window.location.href='/admin/distributor/edit'">Edit</button>
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
          $('.data-table').dataTable({
            data: {!! $distributors !!},
            columns: [
              { data : 'id' },
              { data : 'nama' },
              { data : 'alamat' },
              {
                data : 'id',
                render: function(data) {
                    const link = 'http://localhost:8000/admin/distributor/'+data;
                    const detail = '<a class="btn btn-primary btn-xs" style="margin: 0 3px" href="'+link+'">edit</a>';
                    const hapus = '<form role="form" action="'+link+'" style="margin: 0 3px;display: inline" method="POST">@method("DELETE")@csrf<button class="btn btn-danger btn-xs">delete</button></form>';
                    return '<div class="text-center">'+detail+hapus+'</div>';
                }
              },
            ]
          });
        });
    </script>
@stop
