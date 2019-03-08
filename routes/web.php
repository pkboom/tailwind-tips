<?php

use Faker\Generator as Faker;

Route::get('/', function (Faker $faker) {
    $questions = [];

    foreach (range(0, 20) as $value) {
        $questions[] = [
            'question' => $faker->sentence,
            'answer' => $faker->sentence
        ];
    }

    return view('questions', [
        'questions' => $questions
    ]);
});