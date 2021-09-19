<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorBranch extends Model 
{

    protected $table = 'doctor_branches';
     protected $fillable = [
        'doctor_id',
        'branch_id'
    
       
    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

}