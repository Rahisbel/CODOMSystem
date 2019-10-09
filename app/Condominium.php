<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class Condominium extends Model
{

	protected $fillable = [
        'name', 'direction', 'quantity',
    ];

	public function inmuebles(){
		return $this->hasMany('App\Property');
	}

}
