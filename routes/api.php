<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CountryController;
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


Route::apiResource('countries', CountryController::class);
Route::apiResource('cities', CityController::class);

Route::get('countries/{countryId}/cities', [CountryController::class, 'getCitiesByCountry']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
