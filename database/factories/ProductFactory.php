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
        'Apple',
        'Lemovo A313',
        'Lemovo B415',
        'Apple Mini',
        'Toshiba L755',
    ];
    $proc =[
        'Inel Core i3 5-покоління',
        'Inel Core i3 6-покоління',
        'Inel Core i3 4-покоління',
        'Inel Core i3 3-покоління',
        'Inel Core i4 3-покоління',
        'Inel Core i4 4-покоління',
        'Inel Core i4 5-покоління',
        'Inel Core i5 7-покоління',
        'Inel Core i6 6-покоління',
        'Inel Core i7 5-покоління',
    ];
    $video =[
        'Nvidia Geforce 900M',
        'Nvidia Geforce 910M',
        'Nvidia Geforce 920M',
        'Nvidia Geforce 930M',
        'Nvidia Geforce 940M',
        'Nvidia Geforce 950M',
        'Nvidia Geforce 840M',
        'Nvidia Geforce 850M',
        'Nvidia Geforce 860M',
        'Nvidia Geforce 870M',
    ];

    return [
        'image'=>$faker->image(),
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


