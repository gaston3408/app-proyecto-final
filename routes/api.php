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
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware('auth:api')->post('/details', 'UserController@details');   //o se puede hacer de la siguiente manera...
route::group(['middleware'=>'auth:api'],function(){
      Route::get('profile','UserController@profile');
      //en el postman lo consultamos y nos sale q no estamos logeados porque no tenemos el token;
      //pero si le damos la Autorzation Bearer token en el postman con el correspondiente token ...nos tendria q dar el usuario..

      //ejemplo EVENTOS
      Route::get('events','EventController@index');
});
