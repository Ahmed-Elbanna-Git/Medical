<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchProductStock extends Model 
{

    protected $table = 'branch_products_stock';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }

    public function branch()
    {
        return $this->belongsTo('Branch', 'branch_id');
    }

    public function unit()
    {
        return $this->belongsTo('Unit', 'unit_id');
    }

}