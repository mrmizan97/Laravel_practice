<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Burger;
use Faker\Generator as Faker;

$factory->define(Burger::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'size'=>'small',
    ];
});
