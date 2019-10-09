<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Condition;
use App\Provider;

class Invoice extends Model
{

    public function providers(){
        return $this->hasMany('App\Provider');
    }

    public function condition(){
        return $this->belongsTo('App\Condition');
    }	

}
