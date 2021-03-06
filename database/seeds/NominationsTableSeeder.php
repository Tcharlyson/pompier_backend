<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NominationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nominations')->insert([
            'appelation' => 'Sapeur-pompier volontaire',
            'diminutif' => 'SPV',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('nominations')->insert([
            'appelation' => 'Sapeur-pompier professionnel',
            'diminutif' => 'SPP',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('nominations')->insert([
            'appelation' => 'Double status',
            'diminutif' => 'DS',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
