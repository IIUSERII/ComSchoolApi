<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            ChauffeurTableSeeder::class,
            EcoleTableSeeder::class,
            EtudiantTableSeeder::class,
            LocalisationTableSeeder::class,
            NotificationTableSeeder::class,
            ParentTableSeeder::class,
            TransportTableSeeder::class

        ]);
    }
}
