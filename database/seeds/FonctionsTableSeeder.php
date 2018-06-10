<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FonctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            'appelation' => 'Chef d\'agrès',
            'diminutif' => 'CA',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fonctions')->insert([
            'appelation' => 'Conducteur',
            'diminutif' => 'VL',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fonctions')->insert([
            'appelation' => 'Équipier',
            'diminutif' => 'EQ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fonctions')->insert([
            'appelation' => 'Stationnaire',
            'diminutif' => 'STAS',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
