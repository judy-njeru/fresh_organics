<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MealBox;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(MealBox::class, function (Faker $faker) {
    return [
        'name' => 'Test Meal Box',
        'description' => 'Test Meal Box  Description',
        'price' => 359,
        'image' => 'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/avocado_blackbean_eggs.jpg',
        'created_at' => '2020-01-08 12:50:41',
        'updated_at' => '2020-01-08 12:50:41'
    ];
});
