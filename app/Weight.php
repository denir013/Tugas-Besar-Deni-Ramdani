<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    //
    protected $weight = 'weights';
    protected $fillable = array('name');

    public function item(){
        return $this->hasMany('App\Item','weight_id','id');
    }
}
