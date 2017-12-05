<?php

use Modules\Menu\Entities\Menu;

$faker = Faker\Factory::create('pt_BR');

$factory->define(Menu::class, function () use ($faker)
{
    return [
        'name' => $faker->name,
        'title' => $faker->sentence,
        'route' => 'dashboard',
        'icon' => 'md-view-dashboard',
        'order' => 1
    ];
});