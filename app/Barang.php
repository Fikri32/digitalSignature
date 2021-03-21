<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = ['nama'];


    public function gate()
    {
        return $this->belongsToMany('App\gatepass')->withPivot('created_at');
    }
}
