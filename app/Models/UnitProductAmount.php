<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitProductAmount extends Model 
{

    protected $table = 'unit_product_amount';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function unit()
    {
        return $this->belongsTo('Unit', 'unit_id');
    }

}