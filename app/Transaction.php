<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';
    protected $fillable = array('code','date','customer_name','total_items','subtotal' );

    public function item(){
        return $this->belongsTo('App\Item','code','id');
    }
}
