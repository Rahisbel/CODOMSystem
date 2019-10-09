<?php

namespace App;

use App\Type;
use App\Condominium;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'precio', 'alicuota', 'type_id',
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function condominio(){
        return $this->belongsTo('App\Condominium');
    }

}
