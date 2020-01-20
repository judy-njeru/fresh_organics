<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Admin::class, function (Faker $faker) use ($factory) {
    return [
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'job_title' => 'Manager',
        'password' => '$2y$10$YCa3Qbv9.Ziz7wG3cMgSAua/Erp/msZmwCQOrqXDMwwqKTFtvPXEi', // password
        'remember_token' => Str::random(10),
    ];
});
