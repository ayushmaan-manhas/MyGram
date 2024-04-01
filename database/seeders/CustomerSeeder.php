<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $faker = Faker::create();
            for($i = 1; $i <= 200; $i++)
            {
            $customer = new Customer;
            $customer->user_name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = $faker->randomElement(['male', 'female','other']);
            $customer->address = $faker->address;
            $customer->country = $faker->country;
            $customer->state= $faker->state;
            $customer->dob= $faker->date($format = 'Y-m-d', $max = 'now');
            $customer->password=$faker->password;
            $customer->save();
            }

        //inserting data one-by-one in Db through seeder
            // $customer = new Customer;
            // $customer->user_name = "Champak Champu";
            // $customer->email = "chicken@mygram.com";
            // $customer->gender = "male";
            // $customer->address = "near Big-Ben";
            // $customer->country = "US";
            // $customer->state= "California";
            // $customer->dob= now();
            // $customer->password="123654789";
            // $customer->save();

    }
}
