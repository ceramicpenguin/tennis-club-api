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

$router->group(['prefix' => 'v1'], function () use ($router) {

    $router->get('/', function () use ($router) {

        return 'API v1 root';

    });

    $router->group(['prefix' => 'courts'], function () use ($router) {

        // Get all courts
        $router->get('/', function ()    {

            return 'Get courts';

        });

        // Get one court
        $router->get('/{id}', function ($id)    {

            return 'Get one court:' . $id;

        });

        // Get one courts bookings
        $router->get('/{id}/bookings', function ($id)    {

            return 'Get one courts bookings:' . $id;

        });

    });

    $router->group(['prefix' => 'bookings'], function () use ($router) {

        // Get all bookings
        $router->get('/', function ()    {

            return 'Get bookings';

        });

        // Create a new booking
        $router->post('/', function ()    {

            return 'Create a new booking';

        });

        // Get one booking
        $router->get('/{id}', function ($id)    {

            return 'Get one booking: ' . $id;

        });

        // Update one booking
        $router->put('/{id}', function ()    {

            return 'Update one booking: ' . $id;

        });

        // Delete one booking
        $router->delete('/{id}', function ($id)    {

            return 'Delete one booking: ' . $id;

        });

    });


});