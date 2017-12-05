<?php

use Modules\Organization\Entities\Organization;

$faker = Faker\Factory::create('pt_BR');

$factory->define(Organization::class, function () use ($faker) {
    $rand = rand(1,1000000);
    return [
        'name' => $faker->company.$rand
    ];
});