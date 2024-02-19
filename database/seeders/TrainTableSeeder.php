<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\train ;

use Faker\Generator as Faker;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10; $i++){
        $train = new train();
        $train->azienda = $faker->company();
        $train->stazPartenza = $faker->city();
        $train->stazArrivo = $faker->city();
        $train->orarioPartenza = $faker->dateTime();
        $train->orarioArrivo = $faker->dateTime();
        $train->codice = $faker->randomNumber (4, true);
        $train->carrozze = $faker->randomDigit();
        $train->orario = $faker->boolean();
        $train->cancellato = $faker->boolean();

        $train-> save();
        }
    }
}
