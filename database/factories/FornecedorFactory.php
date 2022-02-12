<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fornecedor;
use Faker\Generator as Faker;

$factory->define(Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'site' => $faker->text(100),
        'uf' => 'BA',
        'email' => $faker->email
    ];
});
