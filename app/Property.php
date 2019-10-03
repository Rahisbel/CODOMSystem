<?php

namespace App;

use App\Type;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'precio', 'alicuota', 'type_id',
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }
}
