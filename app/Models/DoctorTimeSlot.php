<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DoctorTimeSlot extends Model 
{

    protected $table = 'doctor_time_slots';
    protected $fillable = [
        'doctor_working_hour_id',
        'from',
        'to'
    
       
    ];
    public $timestamps = true;

    public function doctorWorkingHour()
    {
        return $this->belongsTo(DoctorSchedule::class, 'doctor_working_hour_id');
    }

}