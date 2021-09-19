<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model 
{

    protected $table = 'purchase_products';
    public $timestamps = true;

    public function purchase()
    {
        return $this->belongsTo('Purchase', 'purchase_id');
    }

}