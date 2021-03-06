<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model 
{

    protected $table = 'products';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function productBranch()
    {
        return $this->hasMany('BranchProductStock');
    }

    public function reservation()
    {
        return $this->hasMany('ReservationProduct');
    }

}