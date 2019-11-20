<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrity_plan_auto extends Model
{
	protected $table = 'Integrity_plan_autos';

    public function plan_auto_id()
    {
    	return $this->hasMany('plan_auto_id');
    }
}
