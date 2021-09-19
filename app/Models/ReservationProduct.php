<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationProduct extends Model 
{

    protected $table = 'reservation_products';
    public $timestamps = true;

    public function reservation()
    {
        return $this->belongsTo('Reservation', 'reservation_id');
    }

    public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }

}