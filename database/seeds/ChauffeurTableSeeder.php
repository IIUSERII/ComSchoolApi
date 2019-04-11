<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ChauffeurTableSeeder extends Seeder
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

            DB::table('chauffeur')->insert([
                'idTransport' => $faker->numberBetween(1 , 11),
                'idCompte' => $faker->numberBetween(1 , 11),
                'nomChauffeur' => $faker->name . $faker->lastName,
                'telChauffeur' => $faker->phoneNumber,

            ]);

        }
    }
}
