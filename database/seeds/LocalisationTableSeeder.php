<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class LocalisationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(0,11) as $index){

            DB::table('localisation')->insert([
                'idTransport' => $faker->numberBetween(0 , 11),
                'idEtudiant' => $faker->numberBetween(0 , 11),
                'latitude' => $faker->randomFloat(null , 0 , 10),
                'longitude' => $faker->randomFloat(null , 0 , 10)

            ]);

        }
    }
}
