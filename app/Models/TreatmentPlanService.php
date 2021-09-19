<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TreatmentPlanService extends Model 
{

    protected $table = 'treatment_plan_services';
     protected $fillable = [
        
        'status',
        'treatment_plan_id',
        'service_id'
       
    ];
    public $timestamps = true;

    public function treatmentPlan()
    {
        return $this->belongsTo(TreatmentPlan::class, 'treatment_plan_id');
    }

     public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}