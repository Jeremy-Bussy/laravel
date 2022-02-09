<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singleton', ['uses' => 'App\Http\Controllers\Controller@increment']);

Route::get('/factory', ['uses' => 'App\Http\Controllers\FactoryController@show']);

Route::get('/facade', ['uses' => 'App\Http\Controllers\FacadeController@commander']);

Route::get('/strategie', ['uses' => 
'App\Http\Controllers\StrategieController@show']);

Route::get('/aggregation', ['uses' => 'App\Http\Controllers\AggregationController@aggregation']);