<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TagService extends Model 
{

    protected $table = 'tag_services';
     protected $fillable = [
        'service_id',
        'tag_id'
       
    ];
    public $timestamps = true;

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}