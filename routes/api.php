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

Route::group(['prefix' => 'v1', 'middleware' => ['json.response', 'throttle:'.config("api.parameters.max_request_attempts") . ',1']], function () {

    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');

    # Authenticated users
    Route::middleware('auth:api')->group(function () {
        Route::get('getUsers/{status?}', 'UserController@getUsers');
        Route::delete('deleteUser', 'UserController@deleteUser');
        Route::post('logout', 'AuthController@logout');
    });

});