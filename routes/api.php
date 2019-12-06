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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('/student', 'StudentsController@create');
// Route::get('/getAll', 'StudentsController@show');
// Route::get('/getById/{id}', 'StudentsController@showById');
// Route::put('/student/{id}', 'StudentsController@update');
// Route::delete('/deleteStudent/{id}', 'StudentsController@destroy');


Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');
});