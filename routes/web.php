<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\CitizenshipController;

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
    $router->group(['middleware' => 'auth'], function () use ($router) {
        // Barangay Information endpoints
        $router->get('barangays/{id}', ['uses' => 'BarangayController@show']);
        $router->post('barangays', ['uses' => 'BarangayController@store']);
        $router->patch('barangays/{id}', ['uses' => 'BarangayController@update']);
        $router->delete('barangays/{id}', ['uses' => 'BarangayController@destroy']);

        // Barangay Official entity endpoints
        $router->get('barangay-officials/', ['uses' => 'BarangayOfficialController@index']);
        $router->get('barangay-officials/{id}', ['uses' => 'BarangayOfficialController@show']);
        $router->post('barangay-officials', ['uses' => 'BarangayOfficialController@store']);
        $router->patch('barangay-officials/{id}', ['uses' => 'BarangayOfficialController@update']);
        $router->delete('barangay-officials/{id}', ['uses' => 'BarangayOfficialController@destroy']);

        // Position entity resource endpoints
        $router->get('positions/', ['uses' => 'PositionsController@index']);
        $router->get('positions/{id}', ['uses' => 'PositionsController@show']);
        $router->post('positions', ['uses' => 'PositionsController@store']);
        $router->patch('positions/{id}', ['uses' => 'PositionsController@update']);
        $router->delete('positions/{id}', ['uses' => 'PositionsController@destroy']);

        // Civil Statuses entity resource endpoints
        $router->get('civil-statuses/', ['uses' => 'CivilStatusController@index']);
        $router->get('civil-statuses/{id}', ['uses' => 'CivilStatusController@show']);
        $router->post('civil-statuses', ['uses' => 'CivilStatusController@store']);
        $router->patch('civil-statuses/{id}', ['uses' => 'CivilStatusController@update']);
        $router->delete('civil-statuses/{id}', ['uses' => 'CivilStatusController@destroy']);

        // Employment Statuses entity resource endpoints
        $router->get('employment-statuses/', ['uses' => 'EmploymentStatusController@index']);
        $router->get('employment-statuses/{id}', ['uses' => 'EmploymentStatusController@show']);
        $router->post('employment-statuses', ['uses' => 'EmploymentStatusController@store']);
        $router->patch('employment-statuses/{id}', ['uses' => 'EmploymentStatusController@update']);
        $router->delete('employment-statuses/{id}', ['uses' => 'EmploymentStatusController@destroy']);

        // Citizenship model resource endpoints
        $router->get('citizenships/', ['uses' => 'CitizenshipController@index']);
        $router->get('citizenships/{id}', ['uses' => 'CitizenshipController@show']);
        $router->post('citizenships', ['uses' => 'CitizenshipController@store']);
        $router->patch('citizenships/{id}', ['uses' => 'CitizenshipController@update']);
        $router->delete('citizenships/{id}', ['uses' => 'CitizenshipController@destroy']);

        // Citizenship model resource endpoints
        $router->get('residents/{id}', ['uses' => 'ResidentController@show']);
        $router->post('residents', ['uses' => 'ResidentController@store']);
        $router->patch('residents/{id}', ['uses' => 'ResidentController@update']);
        $router->delete('residents/{id}', ['uses' => 'ResidentController@destroy']);

        // Logout endpoint
        $router->get('logout', ['uses' => 'Auth\AuthController@logout']);
    });
    
    // Router for register
    $router->group(['prefix' => 'auth'], function () use ($router) {
        $router->post('register', ['uses' => 'Auth\RegisterController@store']);
    });
});