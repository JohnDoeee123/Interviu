<?php

use Faker\Generator as Faker;

$factory->define(App\Interviu::class, function (Faker $faker) {
    return [
        $this->call(InterviuTableSeeder::class);
    ];
});
