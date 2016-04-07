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
    return view('welcome');
});

Route::auth();

//edit user profile
Route::get('user/edit/{id}', 'UController@edit')->name('user.edit');
Route::post('user/edit/{id}', 'UController@update')->name('user.edit');

Route::get('/home', 'HomeController@index')->middleware('auth');

// select pokemon
Route::get('user/pokemon/{id}', 'UController@select')->name('user.pokemon');
Route::post('user/pokemon/{id}', 'UController@save')->name('user.pokemon');

// show my pokemons
Route::get('user/mypokemons/{id}', 'UController@mypo')->name('user.mypokemons');

//adandon pokemon
Route::get('user/mydelete/{id}', 'UController@abandon')->name('user.mydelete');

// sum of the strengths
Route::get('user/strength/{id}', 'UController@myStrength')->name('user.strength');


// show all pokemon
Route::get('pokemon/show', 'PokemonController@show')->name('pokemon.show')->middleware('isAdmin');

// add pokemon
Route::get('pokemon/add', 'PokemonController@create')->name('pokemon.add')->middleware('isAdmin');
Route::post('pokemon/add', 'PokemonController@store')->name('pokemon.add')->middleware('isAdmin');

// edit pokemon
Route::get('pokemon/edit/{id}', 'PokemonController@edit')->name('pokemon.edit')->middleware('isAdmin');;
Route::post('pokemon/edit/{id}', 'PokemonController@update')->name('pokemon.edit')->middleware('isAdmin');;

// delete pokemon
Route::get('pokemon/delete/{id}', 'PokemonController@delete')->name('pokemon.delete')->middleware('isAdmin');;

// admin view all user
Route::get('admin/view', 'AdminController@view')->name('admin.view')->middleware('isAdmin');

// admin mark user
Route::get('admin/mark/{id}', 'AdminController@mark')->name('admin.mark')->middleware('isAdmin');
Route::post('admin/mark/{id}', 'AdminController@save')->name('admin.mark')->middleware('isAdmin');

// admin delete user
Route::get('admin/destroy/{id}', 'AdminController@destroy')->name('admin.destroy')->middleware('isAdmin');

//admin panel
Route::get('admin/index', 'AdminController@index')->name('admin.index')->middleware('isAdmin');

