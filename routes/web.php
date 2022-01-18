<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    
    // Temporary delete
    // $router->group(['middleware' => 'auth'], function () use ($router) {
        // Barangay Information endpoints
        $router->get('barangay/{id}', ['uses' => 'BarangayController@show']);
        $router->post('barangay', ['uses' => 'BarangayController@store']);
        $router->delete('barangay/{id}', ['uses' => 'BarangayController@destroy']);
        $router->patch('barangay/{id}', ['uses' => 'BarangayController@update']);

        // Barangay Official entity endpoints
        $router->get('barangay-officials/', ['uses' => 'BarangayOfficialController@index']);
        $router->get('barangay-officials/{id}', ['uses' => 'BarangayOfficialController@show']);
        $router->post('barangay-officials', ['uses' => 'BarangayOfficialController@store']);
        $router->delete('barangay-officials/{id}', ['uses' => 'BarangayOfficialController@destroy']);
        $router->patch('barangay-officials/{id}', ['uses' => 'BarangayOfficialController@update']);

        // Position entity resource endpoints
        $router->get('positions/', ['uses' => 'PositionsController@index']);
        $router->get('positions/{id}', ['uses' => 'PositionsController@show']);
        $router->post('positions', ['uses' => 'PositionsController@store']);
        $router->delete('positions/{id}', ['uses' => 'PositionsController@destroy']);
        $router->patch('positions/{id}', ['uses' => 'PositionsController@update']);

        // Logout endpoint
        $router->get('logout', ['uses' => 'Auth\AuthController@logout']);
    // });
  
    $router->group(['prefix' => 'auth'], function () use ($router) {
        $router->post('register', ['uses' => 'Auth\RegisterController@store']);
    });
});