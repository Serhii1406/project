<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    $models = [
        'Lenovo',
        'Asus',
        'Toshiba',
        'Acer',
        'Xiaomi',
        'Apple'
    ];
    $proc =[
        'Inel Core i3',
        'Inel Core i4',
        'Inel Core i5',
        'Inel Core i6',
        'Inel Core i7',
        'Inel Core i8'
    ];
    $video =[
        'Nvidia Geforce 900M',
        'Nvidia Geforce 910M',
        'Nvidia Geforce 920M',
        'Nvidia Geforce 930M',
        'Nvidia Geforce 940M',
        'Nvidia Geforce 950M',
    ];

    return [
        'models'=>$faker->randomElement($models),
        'cost'=>random_int(5000, 20000),
        'diagonal' => $faker->randomElement(['14.1', '15.4', '16', '13.3']),
        'processor'=>$faker->randomElement($proc),
        'videocard' => $faker->randomElement($video),
        'memory' => $faker->randomElement(['4','8','16','32', '64']),
        'kilk' => random_int(1, 20),
        'information' => $faker->text,
        'wallet' => $faker->randomElement(['USD', 'EUR', 'UAH']),
    ];
}

);


