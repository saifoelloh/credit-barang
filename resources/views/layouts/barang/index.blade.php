@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-6">
        <h3>Barang</h3>
    </div>
    <div class="col-md-6 text-right">
        <h3>
            <a class="btn btn-info" href={{route('barang.create')}}>
                Tambah Barang
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
                            <th class="text-center">Kode</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Distributor</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Jumlah</th>
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
            data: {!! $barangs !!},
            columns: [
              {data: 'kode'},
              {data: 'nama'},
              {
                  data: 'distributor',
                  render: function(data) {
                      const link = 'http://localhost:8000/admin/distributor/'+data.id;
                      return '<a href="'+link+'">'+data.nama+'</a>';
                  }
              },
              {data: 'harga'},
              {data: 'jumlah'},
              {
                data: 'kode',
                render: function(data) {
                  const link = 'http://localhost:8000/admin/barang/'+data;
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
