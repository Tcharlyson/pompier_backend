<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('natures')->insert([
            'appelation' => 'Feu de forêt',
            'diminutif' => 'FDF',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('natures')->insert([
            'appelation' => 'Feu urbain',
            'diminutif' => 'URB',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('natures')->insert([
            'appelation' => 'Secours à personne',
            'diminutif' => 'SAP',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('natures')->insert([
            'appelation' => 'Opérations diverses',
            'diminutif' => 'DIV',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('natures')->insert([
            'appelation' => 'Accident de la route',
            'diminutif' => 'AVP',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
