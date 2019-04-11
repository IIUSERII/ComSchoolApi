<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransportTableSeeder extends Seeder
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

            DB::table('transport')->insert([
                'idEcole' => $faker->numberBetween(0,11),
                'matricule' => $faker->text(10),
                'nomTransport' => $faker->company

            ]);

        }
    }
}
