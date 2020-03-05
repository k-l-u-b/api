<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Clubber api routes
Route::get('clubbers', 'ClubberController@getClubbers');
Route::get('clubber/{id}', 'ClubberController@getClubber');
//Route::post('clubber/{id}', 'ClubberController@putClubber');
Route::put('clubber/{id}', 'ClubberController@putClubber');
Route::delete('clubber/{id}', 'ClubberController@delClubber');
Route::post('clubber/{id}/perception', 'ClubberController@postPerception');
Route::get('clubber/{id}/perceptions', 'ClubberController@getPerceptions');
Route::put('clubber/{user_id}/perception/{perception_id}', 'ClubberController@putPerception');

// Perception
