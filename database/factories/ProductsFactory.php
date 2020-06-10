<?php

use App\Products;
use Faker\Generator as Faker;

$factory->define(\App\Products::class, function (Faker $faker) {
    return [

            'sku'                       =>  $faker->word,
            'categories_id'             =>  1,
            'sub_categories_id'         =>  2,
            'sub_slave_categories_id'   =>  1 ,
            'product_title'             =>  $faker->title,
            'product_description'       =>  $faker->paragraph ,
            'price'                     =>  250 ,
            'image_url'                 =>  '/storage/androidparty.jpg',


    ];
});
