<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Import Faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 200; $i++) {

            $newTrain = new Train();

            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->destination_station = $faker->city();
            $newTrain->departure_day = $faker->date('Y-m-d', '2026-12-31');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->ean8();
            $newTrain->carriages = $faker->numberBetween(5, 20);
            $newTrain->on_time = $faker->boolean(0.8);
            $newTrain->canceled = $faker->boolean(0.1);

            $newTrain->save();
        }
    }
}
