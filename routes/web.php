<?php

use Faker\Generator as Faker;

Route::get('/', function (Faker $faker) {
    $index = [];
    foreach (range(65, 80) as $key) {
        foreach (range(0, 20) as $value) {
            $index[$key][] = $faker->word;
        }
    }
    return view('sticky-headers', [
        'index' => $index
    ]);
});

