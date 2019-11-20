<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
	
	public $timestamps = false;

    public function Municipalitys()
    {
        return $this->hasMany('municipalities','states_id');
    } 
}
