<?php

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

Route::middleware('auth:api')->get('movies', function () {
	// This route simulates returning movies from database

	return response()->json([
		['id' => 1, 'title'=> 'Pulp Fiction', 'year' => 1994],
		['id' => 2, 'title'=> 'Full Metal Jacket', 'year' => 1987],
		['id' => 3, 'title'=> 'The Godfather', 'year' => 1972],
		['id' => 4, 'title'=> 'Kill Bill: Vol. 1', 'year' => 2003],
	], 200);
});

Route::post('auth/login', 'AuthController@login');
Route::post('auth/register', 'AuthController@register');
Route::post('auth/logout', 'AuthController@logout');
Route::post('auth/refresh', 'AuthController@refresh');
Route::post('auth/me', 'AuthController@me');
