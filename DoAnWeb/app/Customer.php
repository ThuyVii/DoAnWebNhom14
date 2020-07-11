<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public $timestamps = false;
    public function bill(){
        return $this->hasMany('App\Bill','id_customer','id');
    }
}
