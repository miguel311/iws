<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonIntegrityPlan extends Model
{
	protected $table = 'person_integrity_plans';

    public function plan_persona_id()
    {
    	return $this->belongsTo('plan_persona_id');
    }
}
