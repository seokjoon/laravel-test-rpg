<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'as' => 'api.'], function() {
    Route::group(['prefix' => 'v1', 'namespace' => 'v1', 'as' => 'v1.'], function() {
        Route::resource('clients', 'Client\ClientsController');
        Route::resource('quests', 'Quest\QuestsController');
        Route::resource('players', 'Player\PlayersController');
    });
});
