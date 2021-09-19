<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model 
{

    protected $table = 'branches';
     protected $fillable = [
        'name',
        'address',
        'working_from',
        'working_to',
        'phone',
        'active',
       'lat',
       'long',

    
       
    ];

   
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function room()
    {
        return $this->hasMany(Room::class);
    }

    public function doctor()
    {
        return $this->hasMany(DoctorBranch::class);
    }

    public function product()
    {
        return $this->hasMany(BranchProductStock::class);
    }

}