@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <h3>Dashboard</h3>
    <div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>200</h3>
                <p>Transaksi Baru</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="/admin/pembelian" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-lime">
            <div class="inner">
                <h3>60</h3>
                <p>Pelanggan</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="/admin/pelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>120</h3>
                <p>Barang Tersedia</p>
            </div>
            <div class="icon">
                <i class="fa fa-dropbox"></i>
            </div>
            <a href="/admin/barang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-fuchsia">
            <div class="inner">
                <h3>30</h3>
                <p>Distributor</p>
            </div>
            <div class="icon">
                <i class="fa fa-truck"></i>
            </div>
            <a href="/admin/distributor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <h4>Transaksi Terbaru</h4>
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Waktu</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Barang</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>22/June/2019 22:38</td>
                            <td>Amrin Amanu</td>
                            <td>Ticket VIP Gfriend</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop