<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->insert([
            'nom' => 'Bonamy',
            'prenom' => 'Loic',
            'id_grade' => 4,
            'equipe' => 1,
            'id_uv' => 3,
            'specialite' => 'FDF2',
            'carence' => true,
            'conduite' => 'COD2',
            'id_nomination' => 1,
            'est_stagiaire' => false,
            'telephone' => '0640116581',
            'num' => 3056,
            'est_admin' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
            'nom' => 'Platel',
            'prenom' => 'Tcharlyson',
            'id_grade' => 1,
            'equipe' => 1,
            'id_uv' => 1,
            'specialite' => 'FDF1',
            'carence' => false,
            'conduite' => 'VL',
            'id_nomination' => 1,
            'est_stagiaire' => false,
            'telephone' => '0633734729',
            'num' => 3017,
            'est_admin' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
