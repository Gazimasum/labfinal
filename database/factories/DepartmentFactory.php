<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {


	 // $slug = Str::slug($name, '-');
	 // $slug = str_slug($name, '-');
   return [
        'name' =>  $faker->randomElement($array = array('CSE','EEE','ARCH','BBA' )),
        'slug' => $faker->slug,
        'location' => $faker->address,
        'established_date' =>$faker->dateTime($max = 'now', $timezone = null),
        
    ];

});



