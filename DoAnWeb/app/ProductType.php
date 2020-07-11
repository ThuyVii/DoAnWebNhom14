<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";
    public $timestamps = false;
    public function product(){
        return $this->hasMany('App\Product','id_type','id');
    }
}
