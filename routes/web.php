<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

  // AGENTS
  $router->get('agents',  ['uses' => 'AgentController@showAllAgents']);

  $router->get('agents/{id}', ['uses' => 'AgentController@showOneAgent']);

  $router->post('agents', ['uses' => 'AgentController@create']);

  $router->delete('agents/{id}', ['uses' => 'AgentController@delete']);

  $router->put('agents/{id}', ['uses' => 'AgentController@update']);

  // GRADES

  $router->get('grades',  ['uses' => 'GradeController@showAllGrades']);

  $router->get('grades/{id}', ['uses' => 'GradeController@showOneGrade']);

  $router->post('grades', ['uses' => 'GradeController@create']);

  $router->delete('grades/{id}', ['uses' => 'GradeController@delete']);

  $router->put('grades/{id}', ['uses' => 'GradeController@update']);

  // NOMINATIONS

  $router->get('nominations',  ['uses' => 'NominationController@showAllNominations']);

  $router->get('nominations/{id}', ['uses' => 'NominationController@showOneNomination']);

  $router->post('nominations', ['uses' => 'NominationController@create']);

  $router->delete('nominations/{id}', ['uses' => 'NominationController@delete']);

  $router->put('nominations/{id}', ['uses' => 'NominationController@update']);

  // UVS

  $router->get('uvs',  ['uses' => 'UvController@showAllUvs']);

  $router->get('uvs/{id}', ['uses' => 'UvController@showOneUv']);

  $router->post('uvs', ['uses' => 'UvController@create']);

  $router->delete('uvs/{id}', ['uses' => 'UvController@delete']);

  $router->put('uvs/{id}', ['uses' => 'UvController@update']);
});