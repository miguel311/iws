<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
	protected $table = 'parishes';
	public $timestamps = false;

	public function Municipality()
    {
        return $this->belongsTo('municipalities', 'municipalities_id', 'id');
    }

	public function Parish_id()
    {
        return $this->hasMany('parish_id');
    }
}
