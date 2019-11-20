<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
	protected $table = 'parroquias';
	public $timestamps = false;

	public function municipio()
    {
        return $this->belongsTo('Municipio', 'municipio_id', 'id');
    }

	public function parish_id()
    {
        return $this->hasMany('parish_id');
    }



}


