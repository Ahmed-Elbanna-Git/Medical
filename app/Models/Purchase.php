<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model 
{

    protected $table = 'purchases';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function supplier()
    {
        return $this->belongsTo('Supplier', 'supplier_id');
    }

    public function purchaseProduct()
    {
        return $this->hasMany('PurchaseProduct');
    }

}