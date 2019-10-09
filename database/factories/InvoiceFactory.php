<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Invoice::class, function (Faker $faker) {
	$status = rand(1,3);
	$provider_id = rand(1,6);
	$emissionDate = Carbon::now();
	$dueDate = Carbon::now()->addMonth();

    return [
        'emissionDate' => $emissionDate,
        'dueDate'=> $dueDate,
        'condition_id' => $status,
        'provider_id' => $provider_id,
    ];
});
