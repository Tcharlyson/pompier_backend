<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GradesTableSeeder::class,
            NominationsTableSeeder::class,
            UvsTableSeeder::class,
            FonctionsTableSeeder::class,
            NaturesTableSeeder::class,
            VehiculesTableSeeder::class,
            EquipesTableSeeder::class,
            AgentsTableSeeder::class,            
        ]);
    }
}
