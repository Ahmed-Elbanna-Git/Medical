<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicationDate extends Model 
{

    protected $table = 'medication_dates';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function medication()
    {
        return $this->belongsTo('Medication', 'medication_id');
    }

}