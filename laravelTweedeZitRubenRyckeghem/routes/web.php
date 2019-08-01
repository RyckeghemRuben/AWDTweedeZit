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

//deze route op deze manier, omdat men data gaat moeten ophalen
Route::get('/', [
    'uses' => 'ItemController@getIndex',
    'as' => 'home'

]);


//deze route op volgende manier waarbij enkel een view moet worden weergegeven worden

Route::get('/event',[
    'uses' => 'EventController@getIndex',
    'as' => 'events'
]);


Route::get('/profile',[
    'uses' => 'ProfileController@getIndex',
    'as' => 'profile'
]);
Route::post('/profileUpdate', [

    'uses' => 'ProfileController@postUpdateProfile',
    'as' => 'profileUpdate'

]);

Auth::routes();

Route::get('/app', 'HomeController@index')->name('loggedin');


//item route

Route::get('/item/{id}',[
    'uses' => 'ItemController@getItem',
    'as' => 'item'

]);



Route::get('/item/{id}/like}',[
    'uses' => 'ItemController@getLikeItem',
    'as' => 'itemlike'

]);


Route::post('/itemcreate', [

    'uses' => 'ItemController@postCreateItem',
    'as' => 'itemcreate'

]);


Route::post('/itemupdate', [

    'uses' => 'ItemController@postUpdateItem',
    'as' => 'itemupdate'

]);
//admin routes

Route::group(['prefix' => 'admin'], function (){
    Route::get('',[
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);
    Route::get('edit/{id}',[
        'uses' => 'AdminController@getEdit',
        'as' => 'admin.edit'
    ]);
    Route::get('create',[
        'uses' => 'AdminController@getCreate',
        'as' => 'admin.create'
    ]);
    Route::get('delete/{id}',[
        'uses' => 'AdminController@getDelete',
        'as' => 'admin.delete'
    ]);

});

Route::get('/event/{id}/deelnemer}',[
    'uses' => 'EventController@getInschrijvenEventDeelnemer',
    'as' => 'inschrijvenEventDeelnemer'

]);

Route::get('/event/deelnemer/{id}',[
    'uses' => 'EventController@getUitschrijvenEventDeelnemer',
    'as' => 'uitschrijvenEventDeelnemer'

]);

Route::group(['prefix' => 'admin'], function (){
    Route::get('eventCreate',[
        'uses' => 'AdminController@getEventCreate',
        'as' => 'event.create'
    ]);
    Route::get('eventEdit/{id}',[
        'uses' => 'AdminController@getEventEdit',
        'as' => 'event.edit'
    ]);
    Route::get('eventDelete/{id}',[
        'uses' => 'AdminController@getEventDelete',
        'as' => 'event.delete'
    ]);

});

Route::post('/eventCreate',[
    'uses' => 'EventController@postCreateEvent',
    'as' => 'eventCreate'
]);

Route::post('/eventUpdate', [

    'uses' => 'EventController@postUpdateEvent',
    'as' => 'eventUpdate'

]);