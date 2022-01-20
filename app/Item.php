<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    protected $fillable = array('code','type_id','size_id','unit_id','weight', 'price');

    public function type(){
        return $this->belongsTo('App\Type','type_id','id');
    }
    public function size(){
        return $this->belongsTo('App\Size','size_id','id');
    }
    public function unit(){
        return $this->belongsTo('App\Unit','unit_id','id');
    }
}
