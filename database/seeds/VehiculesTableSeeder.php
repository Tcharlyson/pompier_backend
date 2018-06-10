<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VehiculesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicules')->insert([
            'appelation' => 'VSAV',
            'immatriculation' => 'CX-534-BY',
            'armement' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}