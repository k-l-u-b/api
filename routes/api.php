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
Route::put('clubber/{id}', 'ClubberController@putClubber');
