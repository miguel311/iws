<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
	protected $table = 'marcas';
	public $timestamps = false;

    public function uso()
    {
        return $this->belongsTo('Uso', 'uso_id', 'id');
    }

	public function modelos()
    {
        return $this->hasMany('Modelo', 'marca_id', 'id');
    }
}




