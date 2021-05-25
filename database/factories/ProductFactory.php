<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "category_id"=>$faker->randomElement($array = array (1,2,3,4,5,6,7,8,9,10)),
        "pcode"=>$faker->ean13(),
        "pname"=>$faker->word(),
        "pquantity"=>$faker->randomDigitNot(0),
        "pprice"=>$faker->numberBetween($min = 20, $max = 200),
        "pdescription"=>$faker->sentence($nbWords =3, $variableNbWords = true),
        "pstatus"=>$faker->randomElement($array = array (1)),
    ];
});
