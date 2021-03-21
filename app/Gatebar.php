<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gatebar extends Model
{
    protected $table = 'barang_gatepass';
    protected $fillable = ['barang_id','gatepass_id','quantity','remarks'];
}
