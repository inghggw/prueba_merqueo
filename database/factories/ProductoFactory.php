<?php

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

$factory->define(App\Models\Producto::class, function (Faker $faker) {
    return [
        'estado_id' => $faker->numberBetween($min = 1, $max = 2),
        'nombre' => str_random(10),
        'referencia' => str_random(20),
        'precio' => $faker->numberBetween($min = 500, $max = 100000),
        'unidades_actuales' => $faker->numberBetween($min = 10, $max = 1000),
    ];
});
