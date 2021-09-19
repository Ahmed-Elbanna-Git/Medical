<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomService extends Model 
{

    protected $table = 'room_services';
     protected $fillable = [
        'service_id',
        'room_id'
       
    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}