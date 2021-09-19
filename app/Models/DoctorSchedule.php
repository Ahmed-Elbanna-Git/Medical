<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorSchedule extends Model 
{

    protected $table = 'doctor_schedules';
      protected $fillable = [
        'doctor_id',
        'branch_id',
        'created_by',
        'day',
        'active'
    
       
    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function doctorFromToTime()
    {
        return $this->hasMany(DoctorTimeSlot::class);
    }

     public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

}