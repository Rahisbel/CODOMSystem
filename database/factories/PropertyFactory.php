<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
	$precio = rand(1,1000000);
	$alicuota=rand(1,100);
	$type = rand(1,2);

    return [
        'precio' => $precio,
        'alicuota'=> $alicuota,
        'type_id' => $type,
    ];
});
