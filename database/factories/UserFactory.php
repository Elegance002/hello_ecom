<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'user_type' => $faker->randomElement(['admin','seller','customer']),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'avatar'=>$faker->imageUrl('60','60'),
        'avatar_original'=>$faker->imageUrl('60','60'),
        'phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'remember_token' => Str::random(5),
    ];
});
