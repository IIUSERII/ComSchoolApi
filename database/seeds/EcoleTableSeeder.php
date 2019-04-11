<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class EcoleTableSeeder extends Seeder
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

            DB::table('ecole')->insert([

                'idCompte' => $faker->numberBetween(0 , 11),
                'nomEcole' => $faker->company

            ]);

        }

    }
}
