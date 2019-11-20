<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	protected $table = 'brands';
	public $timestamps = false;

    public function usage()
    {
        return $this->belongsTo('usages', 'usages_id', 'id');
    }

	public function model()
    {
        return $this->hasMany('car_models', 'brands_id', 'id');
    }
}
