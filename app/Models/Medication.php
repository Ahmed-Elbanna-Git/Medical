<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model 
{

    protected $table = 'medications';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function reservation()
    {
        return $this->belongsTo('Reservation', 'reservation_id');
    }

    public function date()
    {
        return $this->hasMany('MedicationDate');
    }

}