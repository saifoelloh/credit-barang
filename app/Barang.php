<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'jumlah',
    ];

    public function distributor()
    {
        return $this->belongsTo('App\Distributor');
    }

    public function pembelian()
    {
        return $this->belongsToMany('App\Pembelian');
    }
}
