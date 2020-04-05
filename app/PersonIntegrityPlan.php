<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //Borrado Logico
class PersonIntegrityPlan extends Model
{
	use SoftDeletes; //Borrado Logicos 
    protected $dates = ['deleted_at']; //Registramos Borrado Logico
	protected $table = 'person_integrity_plans';

    public function plan_persona_id()
    {
    	return $this->belongsTo('plan_persona_id');
    }
}
