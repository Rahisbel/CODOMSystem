<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class Condition extends Model
{
    public function invoices(){
        return $this->hasMany('App\Invoice');
    }
}
