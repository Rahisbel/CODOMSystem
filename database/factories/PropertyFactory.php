<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
	$precio = rand(1,1000000);
	$alicuota=rand(1,100);
	$type = rand(1,2);
	$user_id = rand(1,7);

    return [
        'precio' => $precio,
        'alicuota'=> $alicuota,
        'type_id' => $type,
        'user_id' => $user_id,
    ];
});
