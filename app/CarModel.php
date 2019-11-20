<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
	protected $table = 'car_models';
	public $timestamps = false;

	public function brand()
    {
        return $this->belongsTo('brands', 'brands_id', 'id');
    }

	public function car_id()
    {
        return $this->hasMany('car_id');
    }
}
