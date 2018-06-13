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
        'id_grade' => 5,
        'id_equipe' => 1,
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
        'nom' => 'Belly',
        'prenom' => 'Philippe',
        'id_grade' => 4,
        'id_equipe' => 1,
        'id_uv' => 3,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0667402387',
        'num' => 3054,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Deligne',
        'prenom' => 'Antoine',
        'id_grade' => 3,
        'id_equipe' => 1,
        'id_uv' => 2,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0670890352',
        'num' => 3061,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Sellin',
        'prenom' => 'Mathieu',
        'id_grade' => 3,
        'id_equipe' => 1,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0628014092',
        'num' => 3076,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Tignères',
        'prenom' => 'Alexis',
        'id_grade' => 2,
        'id_equipe' => 1,
        'id_uv' => 2,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0604164081',
        'num' => 3018,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Thomas',
        'prenom' => 'Frédéric',
        'id_grade' => 2,
        'id_equipe' => 1,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0613334765',
        'num' => 3031,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Platel',
        'prenom' => 'Tcharlyson',
        'id_grade' => 1,
        'id_equipe' => 1,
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

        DB::table('agents')->insert([
        'nom' => 'Versos',
        'prenom' => 'Jonathan',
        'id_grade' => 1,
        'id_equipe' => 1,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0776696719',
        'num' => 3050,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // -------------- Équipe 2 --------------

        DB::table('agents')->insert([
        'nom' => 'Rey',
        'prenom' => 'Nicolas',
        'id_grade' => 5,
        'id_equipe' => 2,
        'id_uv' => 3,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0620971013',
        'num' => 3073,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Edrocard',
        'prenom' => 'Stéphane',
        'id_grade' => 4,
        'id_equipe' => 2,
        'id_uv' => 3,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0683969931',
        'num' => 3063,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Ranouil',
        'prenom' => 'Cédric',
        'id_grade' => 5,
        'id_equipe' => 2,
        'id_uv' => 3,
        'specialite' => 'FDF1',
        'carence' => true,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0686919254',
        'num' => 3072,
        'est_admin' => true,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Arnaud',
        'prenom' => 'Lionel',
        'id_grade' => 3,
        'id_equipe' => 2,
        'id_uv' => 2,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0672224891',
        'num' => 3053,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Jeandreau',
        'prenom' => 'Baptiste',
        'id_grade' => 3,
        'id_equipe' => 2,
        'id_uv' => 2,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0661789851',
        'num' => 3065,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Tignères',
        'prenom' => 'Aurore',
        'id_grade' => 1,
        'id_equipe' => 2,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0674729700',
        'num' => 3015,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Guerra',
        'prenom' => 'Corentin',
        'id_grade' => 1,
        'id_equipe' => 2,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0609456920',
        'num' => 3039,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Ducos',
        'prenom' => 'Thierry',
        'id_grade' => 1,
        'id_equipe' => 2,
        'id_uv' => 1,
        'specialite' => '',
        'carence' => false,
        'conduite' => 'VL',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0621788070',
        'num' => 3052,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Edrocard',
        'prenom' => 'Lilian',
        'id_grade' => 1,
        'id_equipe' => 2,
        'id_uv' => 1,
        'specialite' => '',
        'carence' => false,
        'conduite' => '',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0641580167',
        'num' => 3131,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // -------------- Double Statut 1 --------------

        DB::table('agents')->insert([
        'nom' => 'Jouan',
        'prenom' => 'Mickael',
        'id_grade' => 5,
        'id_equipe' => 3,
        'id_uv' => 4,
        'specialite' => 'FDF2',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0665326788',
        'num' => 3066,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // -------------- Double Statut 2 --------------

        DB::table('agents')->insert([
        'nom' => 'Devines',
        'prenom' => 'Vincent',
        'id_grade' => 5,
        'id_equipe' => 4,
        'id_uv' => 4,
        'specialite' => 'FDF2',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0616834409',
        'num' => 3062,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Obry',
        'prenom' => 'Julien',
        'id_grade' => 5,
        'id_equipe' => 4,
        'id_uv' => 4,
        'specialite' => 'FDF2',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0610776343',
        'num' => 3070,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Roney',
        'prenom' => 'Mickael',
        'id_grade' => 5,
        'id_equipe' => 4,
        'id_uv' => 4,
        'specialite' => 'FDF2',
        'carence' => false,
        'conduite' => 'COD1',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0682941200',
        'num' => 3074,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // -------------- Garde SPP --------------

        DB::table('agents')->insert([
        'nom' => 'Chaumard',
        'prenom' => 'Yannick',
        'id_grade' => 7,
        'id_equipe' => 5,
        'id_uv' => 4,
        'specialite' => 'FDF2',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0627161379',
        'num' => 3084,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Guignes',
        'prenom' => 'Laurent',
        'id_grade' => 7,
        'id_equipe' => 5,
        'id_uv' => 4,
        'specialite' => 'FDF2',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0610073758',
        'num' => 3083,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Uhrig',
        'prenom' => 'Adrien',
        'id_grade' => 4,
        'id_equipe' => 5,
        'id_uv' => 3,
        'specialite' => 'FDF2',
        'carence' => true,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0611702033',
        'num' => 3049,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Bonin',
        'prenom' => 'Julien',
        'id_grade' => 2,
        'id_equipe' => 5,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0650344949',
        'num' => 3040,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Dubart',
        'prenom' => 'Yves',
        'id_grade' => 2,
        'id_equipe' => 5,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0632044055',
        'num' => 3041,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('agents')->insert([
        'nom' => 'Brunet',
        'prenom' => 'Etienne',
        'id_grade' => 2,
        'id_equipe' => 5,
        'id_uv' => 1,
        'specialite' => 'FDF1',
        'carence' => false,
        'conduite' => 'COD2',
        'id_nomination' => 1,
        'est_stagiaire' => false,
        'telephone' => '0617604697',
        'num' => 3085,
        'est_admin' => false,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
