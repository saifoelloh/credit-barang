<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'jumlah',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function distributor()
    {
        return $this->belongsTo('App\Distributor');
    }
}
