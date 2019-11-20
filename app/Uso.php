<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    protected $table = 'usos';
	
	public $timestamps = false;

    public function marcas()
    {
        return $this->hasMany('marca','uso_id');
    } 
}