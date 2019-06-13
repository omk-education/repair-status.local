<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Order;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $masters = User::select('id')->where('role', 'master')->get()->toArray();
    $masters = data_get($masters, '*.id');
    $status = [
        'В ремонте',
        'Требует согласования',
        'Ремонт завершен',
        'Ремонт закрыт'
    ];

    return [
        'number' => $faker->unique()->regexify('[0-9]{6}'),
        'description' => $faker->text(rand(50, 100)),
        'diagnostics' => $faker->text(rand(200, 350)),
        'notice' => $faker->text(rand(100, 150)),
        'master' => $faker->randomElement($masters),
        'status' => $faker->randomElement($status),
    ];
});
