<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model 
{

    protected $table = 'tag';
    protected $fillable = [
        'tag',
      
       
    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function service()
    {
        return $this->hasMany(TagService::class);
    }

}