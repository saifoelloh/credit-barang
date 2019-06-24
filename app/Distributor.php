<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'nama',
        'alamat'
    ];

    public function barangs()
    {
        return $this->hasMany('App\Barang');
    }
}
