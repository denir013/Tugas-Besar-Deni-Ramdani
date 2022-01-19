<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    protected $table = 'sizes';
    protected $fillable = array('name');

    public function item(){
        return $this->hasMany('App\Item','size_id','id');
    }
}
