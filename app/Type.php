<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table = 'types';
    protected $fillable = array('name');

    public function item(){
        return $this->hasMany('App\Item','type_id','id');
    }
}
