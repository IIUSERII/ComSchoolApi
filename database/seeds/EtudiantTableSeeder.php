<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class EtudiantTableSeeder extends Seeder
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

            DB::table('etudiant')->insert([

                'idParent' => $faker->numberBetween(11),
                'idTransport' => $faker->numberBetween(11),
                'idEcole' => $faker->numberBetween(11),
                'nomEtudiant' => $faker->name . $faker->lastName
            ]);

        }
    }
}
