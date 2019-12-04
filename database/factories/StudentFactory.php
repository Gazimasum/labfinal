<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
     return [
       'name' => $faker->name,
        'email' => $faker->safeEmail,
        'country' => $faker->country,       
        'profile_image' => $faker->imageUrl($width = 200, $height = 300, 'cats'),
        
        'department_id'=>$faker->numberBetween($min = 1, $max = 10), 
        
        // 'department_id'=>factory(App\Department::class)->create()->id,
    ];
});
