<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthIntegrity extends Model
{
	public function contractor(){ 
	    return $this->hasMany(ContractingQuote::class); //almacenar usuarios contratantes.
	}
}
