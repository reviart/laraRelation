<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

/*
Create user
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
*/

/*
Create customers
$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'contact_number' => $faker->phoneNumber,
        'delivery_address' => $faker->address,
    ];
});
*/

/*
Create post
$factory->define(App\BlogPost::class, function (Faker\Generator $faker) {
    $key = ['seru','asik','bored'];
    return [
        'title' => $faker->sentence(),
        'meta_description' => $faker->realText($faker->numberBetween(60,100)),
        'keywords' => $faker->randomElement($key),
        'content' => $faker->paragraph(random_int(3,5)),
        'published_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
        'user_id' => App\User::all()->random()->id,
    ];
});
*/

/*
Create page
$factory->define(App\Page::class, function (Faker\Generator $faker) {
    $key = ['page_key1','page_key2','page_key3'];
    return [
        'title' => $faker->sentence(),
        'meta_description' => $faker->realText($faker->numberBetween(60,100)),
        'keywords' => $faker->randomElement($key),
        'content' => $faker->paragraph(random_int(3,5)),
        'published_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
        'user_id' => App\User::all()->random()->id,
    ];
});
*/

/*
Create brands
$factory->define(App\Brand::class, function (Faker\Generator $faker) {
    $key = ['addidas','nike','puma', 'specs', 'mizuno', 'eiger', 'mitre'];
    return [
        'name' => $faker->randomElement($key),
        'remarks' => $faker->realText($faker->numberBetween(60,100)),
    ];
});
*/

/*
Create products
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(4),
        'description' => $faker->realText($faker->numberBetween(60,100)),
        'price' => $faker->numberBetween(100000,1000000),
        'brand_id' => App\Brand::all()->random()->id,
    ];
});
*/

/*
Create orders
$factory->define(App\Order::class, function (Faker\Generator $faker) {
    $status = ['Pending', 'On payment', 'Success'];
    return [
        'order_id' => $faker->swiftBicNumber,
        'transaction_date' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
        'customer_id' => App\Customer::all()->random()->id,
        'status' => $faker->randomElement($status),
        'total_amount' => $faker->numberBetween(1000000,10000000),
    ];
});
*/

/*
Create order details
$factory->define(App\OrderDetail::class, function (Faker\Generator $faker) {
    return [
        'order_id' => App\Order::all()->random()->order_id,
        'product_id' => App\Product::all()->random()->id,
        'quantity' => $faker->numberBetween(1,10),
        'sub_total' => $faker->numberBetween(1000000,10000000),
    ];
});
*/
