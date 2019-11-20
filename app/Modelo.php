<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
	protected $table = 'modelos';
	public $timestamps = false;

	public function marca()
    {
        return $this->belongsTo('Marca', 'marca_id', 'id');
    }

	public function auto_id()
    {
        return $this->hasMany('auto_id');
    }
}




