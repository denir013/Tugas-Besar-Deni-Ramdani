<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table = 'units';
    protected $fillable = array('name');

    public function item(){
        return $this->hasMany('App\Item','unit_id','id');
    }
}
