<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    protected $table = 'usages';
	
	public $timestamps = false;

    public function Brand()
    {
        return $this->hasMany('brands','usages_id');
    } 
}
