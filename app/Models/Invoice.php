<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model 
{

    protected $table = 'invoices';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function reservation()
    {
        return $this->belongsTo('Reservation', 'reservation_id');
    }

    public function invoiceItem()
    {
        return $this->hasMany('InvoiceItem');
    }

}