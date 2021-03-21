<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gatepass extends Model
{
    protected $table = 'gatepasses';
    protected $fillable = [
        'GO','PO','tgl','remarks','trans_agent','truck','despatch_spv','despatch_manag','authorized_sign'];

    public function barang()
    {
        return $this->belongsToMany('App\Barang')->withPivot('created_at');
    }
}
