<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ParentTableSeeder extends Seeder
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

            DB::table('parent')->insert([
                'idCompte' => $faker->numberBetween(0 , 11),
                'nomParent' => $faker->name . $faker->lastName,
                'telParent' => $faker->phoneNumber

            ]);

        }
    }
}
