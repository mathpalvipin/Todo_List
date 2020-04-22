<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TodosController@index'  );
 Route::resource('todos','TodosController');
Route::get('Todo/create','TodosController@create');
Route::post('Todo/store','TodosController@store');
Route::get('Todo/update/{id}','TodosController@update');
Route::get('Todo/delete/{id}','TodosController@destroy'  );
Route::get('Todo/{id}/edit','TodosController@edit'  );
Route::get('Todo/{id}','TodosController@show'  );
