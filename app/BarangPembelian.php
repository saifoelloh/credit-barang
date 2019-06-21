<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangPembelian extends Model
{
    protected $fillable = [
        'pelanggan_id',
        'kd_barang',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function barang()
    {
        return $this->belongsToMany('App\Barang');
    }

    public function custommer()
    {
        return $this->belongsToMany('App\Custommer');
    }
}
