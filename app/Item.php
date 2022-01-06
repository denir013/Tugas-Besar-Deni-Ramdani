<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    protected $fillable = array('code','type','size','unit','weight', 'price');
}
