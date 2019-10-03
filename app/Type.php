<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

	public function inmuebles(){
		return $this->hasMany('App\Property');
	}

}
