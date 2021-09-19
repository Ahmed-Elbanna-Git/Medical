<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model 
{

    protected $table = 'user_information';
     protected $fillable = [
        'user_id',
        'option',
        'value'
       
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}