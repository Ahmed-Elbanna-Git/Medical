<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model 
{

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
        'active',
       'user_name',
       'type',

       'last_login_at'
       
    ];


   
   
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function information()
    {
        return $this->hasMany(UserInformation::class);
    }

    public function medication()
    {
        return $this->hasMany('Medication');
    }

    public function treatmentPlan()
    {
        return $this->hasMany('TreatmentPlan');
    }

       public function doctorBranch()
    {
        return $this->hasMany(DoctorBranch::class);
    }

}