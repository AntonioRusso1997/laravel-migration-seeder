<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $new_trip = new Trip();
            $new_trip->reference = $faker->bothify('#####');
            $new_trip->departure_city = $faker->city();
            $new_trip->destination = $faker->city();
            $new_trip->daparture_date = $faker->date();
            $new_trip->return_date = $faker->date();
            $new_trip->price = $faker->randomFloat(2, 20_000, 1_000_000);
            $new_trip->accomodation = $faker->word(3) .' Hotel ';
            $new_trip->save();
        }
    }
}
