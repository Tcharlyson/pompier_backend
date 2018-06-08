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
            'appelation' => 'Sergent Chef',
            'diminutif' => 'SCH',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
