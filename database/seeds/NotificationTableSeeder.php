<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationTableSeeder extends Seeder
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

            DB::table('notification')->insert([
                'idTransport' => $faker->numberBetween(0,11),
                'message' => $faker->text(150),
                'seen' => false

            ]);

        }
    }
}
