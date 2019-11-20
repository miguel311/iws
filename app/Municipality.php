<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
	protected $table = 'municipalities';
	public $timestamps = false;

    public function state()
    {
        return $this->belongsTo('states', 'states_id', 'id');
    }

	public function Parish()
    {
        return $this->hasMany('parishes', 'municipalities_id', 'id');
    }
}
