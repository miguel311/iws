<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrity_Salud extends Model
{

	public function contractor(){ 
	    return $this->hasMany(cotiza_contractor::class); //almacenar usuarios contratantes.
	}

}
