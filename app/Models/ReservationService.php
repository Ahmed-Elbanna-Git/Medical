<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationService extends Model 
{

    protected $table = 'reservation_services';
     protected $fillable = [
        'service_id',
        'reservation_id',
        'net_price'
       
    ];
    public $timestamps = true;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

}