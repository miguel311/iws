<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrity_plan_persona extends Model
{
	protected $table = 'Integrity_plan_personas';

    public function plan_persona_id()
    {
    	return $this->belongsTo('plan_persona_id');
    }


}




