<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model 
{

    protected $table = 'services';
     protected $fillable = [
        'name',
        'service_category_id',
        'password',
        'price_to',
        'price_from',
        'duration'
       
    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function serivceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_catogry_id');
    }

    public function tag()
    {
        return $this->hasMany(TagService::class);
    }

    public function reservation()
    {
        return $this->hasMany(ReservationService::class);
    }

      public function treatmentPlanService()
    {
        return $this->hasMany(TreatmentPlanService::class);
    }

}