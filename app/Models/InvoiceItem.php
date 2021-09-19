<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model 
{

    protected $table = 'invoice_items';
    public $timestamps = true;

    public function invoice()
    {
        return $this->belongsTo('Invoice', 'invoice_id');
    }

}