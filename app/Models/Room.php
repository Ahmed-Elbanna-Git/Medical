<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helper\SearchTrait;
class Room extends Model 
{

    use SearchTrait;

    protected $table = 'rooms';
    protected $fillable = [
        'name',
        'branch_id',
        'working_from',
        'working_to',
        'phone',
        'active'

    ];
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function doctor()
    {
        return $this->hasMany(RoomService::class);
    }

}