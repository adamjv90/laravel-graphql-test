<?php

use Faker\Generator as Faker;

$factory->define(App\LookbookDesigner::class, function (Faker $faker) {
    return [
      'slug' => $faker->slug,
      'name' => $faker->name,
      'email' => $faker->email,
      'phone' => $faker->phoneNumber,
      'cover' => $faker->imageUrl(1200, 1200),
      'image' => $faker->imageUrl(500, 500),
      'url' => $faker->url,
      'retail' => $faker->url,
      'facebook' => $faker->slug,
      'pinterest' => $faker->slug,
      'twitter' => $faker->slug,
      'instagram' => $faker->slug,
      'description' => $faker->realText(100),
      'featured' => $faker->boolean
    ];
});
