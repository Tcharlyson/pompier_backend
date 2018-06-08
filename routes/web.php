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
  $router->get('agents',  ['uses' => 'AgentController@showAllAgents']);

  $router->get('agents/{id}', ['uses' => 'AgentController@showOneAgent']);

  $router->post('agents', ['uses' => 'AgentController@create']);

  $router->delete('agents/{id}', ['uses' => 'AgentController@delete']);

  $router->put('agents/{id}', ['uses' => 'AgentController@update']);
});