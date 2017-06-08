<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});
/*-- grupo ruta para administracion
*** todas rutas dentro del grupo van dentro de admin (prefix)
*/
Route::group(['prefix' => 'admin'], function () {

Route::resource('users','UsersController');/* 2 param es el controlador   */
//borrar usuario
Route::get('users/{id}/destroy', [
   'uses' => 'UsersController@destroy' ,
   'as' => 'admin.users.destroy'
 ]);

 Route::resource('categories','CategoriesController');
 Route::get('categories/{id}/destroy', [
    'uses' => 'CategoriesController@destroy' ,
    'as' => 'admin.categories.destroy'
  ]);
});

Route::auth();

Route::get('/', 'HomeController@index');
