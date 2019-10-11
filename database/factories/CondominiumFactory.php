<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Condominium;
use Faker\Generator as Faker;

$factory->define(Condominium::class, function (Faker $faker) {
	    return [
        'name' => $faker->name,
        'direction' => $faker->name,
        'quantity' => $faker->numberBetween(1,15),
    ];
});
