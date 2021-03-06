<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    protected $fillable = array('code','type_id','size_id','unit_id','weight_id', 'price');

    public function type(){
        return $this->belongsTo('App\Type','type_id','id');
    }
    public function size(){
        return $this->belongsTo('App\Size','size_id','id');
    }
    public function unit(){
        return $this->belongsTo('App\Unit','unit_id','id');
    }
    public function weight(){
        return $this->belongsTo('App\Weight','weight_id','id');
    }
    public function transaction(){
        return $this->hasMany('App\Transaction','code','id');
    }
}
