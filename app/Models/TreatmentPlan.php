<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentPlan extends Model 
{

    protected $table = 'treatment_plans';
    protected $fillable = [
        'name',
        'user_id',
        'doctor_id',
        'reservation_id'
       
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

    public function treatmentPlanService()
    {
        return $this->hasMany(TreatmentPlanService::class);
    }

}