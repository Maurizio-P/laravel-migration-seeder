<?php

require_once 'vendor/autoload.php';
use Illuminate\Database\Seeder;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // $travels = [];

        for($i = 0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->name = $faker->name();
            $newTravel->price = $faker->randomFloat(2, 0, 300);
            $newTravel->duration = "2 days";
            $newTravel->description = $faker->realText();
            $newTravel->destination = $faker->state();
            $newTravel->votes = $faker->randomDigit();
            $newTravel->save();
        }
    }
}
