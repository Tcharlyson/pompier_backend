<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'appelation' => 'Équipe 1',
            'diminutif' => 'EQ1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('equipes')->insert([
            'appelation' => 'Équipe 2',
            'diminutif' => 'EQ2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('equipes')->insert([
            'appelation' => 'Double status 1',
            'diminutif' => 'DS1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('equipes')->insert([
            'appelation' => 'Double status 2',
            'diminutif' => 'DS2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('equipes')->insert([
            'appelation' => 'Garde',
            'diminutif' => 'GRD',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
