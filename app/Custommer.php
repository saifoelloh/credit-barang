<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pembelian()
    {
        return $this->belongsToMany('App\Pembelian');
    }
}
