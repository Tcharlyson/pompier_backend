<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id')->nullable(false);
            $table->string('nom');
            $table->string('prenom');
            $table->integer('id_grade')->unsigned();
            $table->integer('equipe');
            $table->integer('id_uv')->unsigned();
            $table->enum('specialite', ['FDF1', 'FDF2']);
            $table->boolean('carence');
            $table->enum('conduite', ['VL', 'COD1', 'COD2']);
            $table->integer('id_nomination')->unsigned();
            $table->boolean('est_stagiaire')->default(false);
            $table->string('telephone');
            $table->string('num');
            $table->boolean('est_admin')->default(false);
            $table->timestamps();

        });

        Schema::create('vehicules', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('appelation')->nullable(false);
            $table->string('immatriculation');
            $table->integer('armement');
            $table->timestamps();

        });

        Schema::create('horaires', function (Blueprint $table) {
            
            // TABLE DEFINITION
            $table->increments('id');
            $table->integer('id_agent')->nullable(false)->unsigned();
            $table->enum('type', ['garde', 'astreinte'])->nullable(false);
            $table->dateTime('horaire_debut')->nullable(false);
            $table->dateTime('horaire_fin')->nullable(false);
            $table->timestamps();   

        });

        Schema::create('agents_vehicules', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->integer('id');
            $table->integer('id_agent')->nullable(false)->unsigned();
            $table->integer('id_vehicule')->nullable(false)->unsigned();
            $table->integer('id_fonction')->nullable(false)->unsigned();
            $table->timestamps(); 
            
        });

         Schema::create('departs', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->datetime('date')->nullable(false);
            $table->integer('numero_codis')->nullable(false);
            $table->integer('numero_cr')->nullable(false);
            $table->integer('id_nature')->nullable(false)->unsigned();
            $table->integer('id_commune')->nullable(false)->unsigned();
            $table->datetime('date_appel');
            $table->datetime('date_depart');
            $table->datetime('date_sll');
            $table->datetime('date_rentre');
            $table->boolean('est_annule')->default(false);
            $table->timestamps();

        });

        Schema::create('grades', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('appelation')->nullable(false);
            $table->enum('diminutif', ['SAP', 'CAP', 'CCH', 'SGT', 'SCH', 'ADJ', 'ACH', 'LTN', 'CNE', 'CMT', 'LCL', 'COL'])->nullable(false);
            $table->timestamps();

        });

        Schema::create('nominations', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('appelation')->nullable(false);
            $table->enum('diminutif', ['SPP', 'SPV', 'DS'])->nullable(false);
            $table->timestamps();

        });

        Schema::create('uvs', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('appelation')->nullable(false);
            $table->enum('diminutif', ['EQ', 'CE', 'CAE', 'CATE'])->nullable(false);
            $table->timestamps();

        });

        Schema::create('fonctions', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('appelation')->nullable(false);
            $table->enum('diminutif', ['CA', 'VL', 'EQ', 'STAS'])->nullable(false);
            $table->timestamps();

        });

        Schema::create('natures', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('appelation')->nullable(false);
            $table->enum('diminutif', ['FDF', 'URB', 'SAP', 'DIV', 'AVP'])->nullable(false);
            $table->timestamps();

        });

        Schema::create('communes', function (Blueprint $table) {

            // TABLE DEFINITION
            $table->increments('id');
            $table->string('nom')->nullable(false);
            $table->string('postal');
            $table->timestamps();
            
        });

        Schema::table('agents', function (Blueprint $table) {

            // PRIMARY AND FOREIGN KEYS
            $table->foreign('id_grade')->references('id')->on('grades');    
            $table->foreign('id_uv')->references('id')->on('uvs');
            $table->foreign('id_nomination')->references('id')->on('nominations');
            
        });


        Schema::table('horaires', function (Blueprint $table) {

            // PRIMARY AND FOREIGN KEYS
            $table->foreign('id_agent')->references('id')->on('agents');             
            
        });

        Schema::table('agents_vehicules', function (Blueprint $table) {

            // PRIMARY AND FOREIGN KEYS
            $table->foreign('id_agent')->references('id')->on('agents');
            $table->foreign('id_vehicule')->references('id')->on('vehicules'); 
            $table->foreign('id_fonction')->references('id')->on('fonctions');            
            
        });

        Schema::table('departs', function (Blueprint $table) {

            // PRIMARY AND FOREIGN KEYS
            $table->foreign('id_nature')->references('id')->on('natures');
            $table->foreign('id_commune')->references('id')->on('communes');             
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
        Schema::dropIfExists('vehicules');
        Schema::dropIfExists('horaires');
        Schema::dropIfExists('agents_vehicules');
        Schema::dropIfExists('departs');
        Schema::dropIfExists('grades');
        Schema::dropIfExists('nominations');
        Schema::dropIfExists('uvs');
        Schema::dropIfExists('fonctions');
        Schema::dropIfExists('natures');
        Schema::dropIfExists('communes');   
    }
}
