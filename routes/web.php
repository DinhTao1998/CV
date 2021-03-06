<?php

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
Route::get('index',[
	'as'=> 'index',
	'uses'=>'CVController@getIndex'
]);
Route::get('homepage',[
	'as'=> 'homepage',
	'uses'=>'CVController@getHomepage'
]);
Route:: group(['prefix'=>'ajax'],function(){
	Route::get('filtersearch/{key}','CVController@filterSearch');
});
Route::get('homepage/{id}', 'CVController@getInformation');
