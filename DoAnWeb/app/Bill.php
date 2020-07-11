<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public $timestamps = false;
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }

    public function bill(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
}
