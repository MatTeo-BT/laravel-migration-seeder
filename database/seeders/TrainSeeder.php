<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 400; $i++) {
            $actualTrain = new Train();

            $actualTrain->company = $faker->unique()->realText(50);
            $actualTrain->departure_station = $faker->unique()->realText(50);
            $actualTrain->arrival_station = $faker->unique()->realText(50);
            $actualTrain->departure_time =  $faker->dateTimeBetween('-1 week', '+1 week');
            $actualTrain->arrival_time =  $faker->dateTimeBetween('-1 week', '+1 week');
            $actualTrain->number_of_carriages = $faker->randomDigit(5);;
            $actualTrain->on_time = $faker->boolean;
            $actualTrain->canceled = $faker->boolean;
            $actualTrain->save();
        }
    }
}