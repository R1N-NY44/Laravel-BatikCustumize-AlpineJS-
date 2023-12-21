<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Login Register
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');

// Design Api
// get all design
Route::get('/design', 'DesignController@getAllDesign');
// get design by id
Route::get('/design/{id}', 'DesignController@getDesignById');
// create design 
Route::post('/design', 'DesignController@createDesign');
// update design
Route::put('/design/{id}', 'DesignController@updateDesign');
// delete design
Route::delete('/design/{id}', 'DesignController@deleteDesign');
// get design by name
Route::get('/design/search/{name}', 'DesignController@getDesignByName');

// Motive Api
// get all motive
Route::get('/motive', 'MotiveController@getAllMotive');
// get motive by id
Route::get('/motive/{id}', 'MotiveController@getMotiveById');
// create motive
Route::post('/motive', 'MotiveController@createMotive');
// update motive
Route::put('/motive/{id}', 'MotiveController@updateMotive');
// delete motive
Route::delete('/motive/{id}', 'MotiveController@deleteMotive');
// get motive by name
Route::get('/motive/search/{name}', 'MotiveController@getMotiveByName');

// Cusom Batik Api
// get all custom batik
Route::get('/custom-batik', 'CustomBatikController@getAllCustomBatik');
// get custom batik by id
Route::get('/custom-batik/{id}', 'CustomBatikController@getCustomBatikById');
// create custom batik
Route::post('/custom-batik', 'CustomBatikController@createCustomBatik');
// update custom batik
Route::put('/custom-batik/{id}', 'CustomBatikController@updateCustomBatik');
// delete custom batik
Route::delete('/custom-batik/{id}', 'CustomBatikController@deleteCustomBatik');
// get custom batik by name
Route::get('/custom-batik/search/{name}', 'CustomBatikController@getCustomBatikByName');


