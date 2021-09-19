<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model 
{

    protected $table = 'reservations';
    protected $fillable = [
        'branch_id',
        'room_id',
        'doctor_id',
        'patient_id',
        'promo_code_id',
        'status',
        'total',
        'discount',
        'discount_type',
        'discount_amount'
       
    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function service()
    {
        return $this->hasMany(ReservationService::class);
    }

     public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

     public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

     public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function medication()
    {
        return $this->hasMany(Medication::class);
    }

    public function product()
    {
        return $this->hasMany(ReservationProduct::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function treatmentPlan()
    {
        return $this->hasMany(TreatmentPlan::class);
    }

}