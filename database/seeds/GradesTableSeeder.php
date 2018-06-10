<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'appelation' => 'Sapeur',
            'diminutif' => 'SAP',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Caporal',
            'diminutif' => 'CAP',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Caporal Chef',
            'diminutif' => 'CCH',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Sergent',
            'diminutif' => 'SGT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Sergent Chef',
            'diminutif' => 'SCH',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Adjudant',
            'diminutif' => 'ADJ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Adjudant Chef',
            'diminutif' => 'ACH',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Lieutenant',
            'diminutif' => 'LTN',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Capitaine',
            'diminutif' => 'CNE',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Commandant',
            'diminutif' => 'CMT',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Lieutenant Colonel',
            'diminutif' => 'LCL',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('grades')->insert([
            'appelation' => 'Colonel',
            'diminutif' => 'COL',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
