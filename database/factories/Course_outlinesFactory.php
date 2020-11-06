<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course_outlines;
use Faker\Generator as Faker;

$factory->define(Course_outlines::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'course_title_no' => $faker->randomDigitNotNull,
        'course_title' => $faker->word,
        'duration' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
