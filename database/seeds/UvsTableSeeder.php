<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uvs')->insert([
            'appelation' => 'Équipier',
            'diminutif' => 'EQ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
         DB::table('uvs')->insert([
            'appelation' => 'Chef d\'équipe',
            'diminutif' => 'CE',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('uvs')->insert([
            'appelation' => 'Chef d\'agrès une équipe',
            'diminutif' => 'CAE',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('uvs')->insert([
            'appelation' => 'Chef d\'agrès tout engin',
            'diminutif' => 'CATE',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
