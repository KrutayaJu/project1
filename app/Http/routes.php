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

Route::get('/home', 'UserController@index');
Route::get('/pages', 'ArtcomController@index');


Route::get('/admin', 'LoginController@index');
Route::post('/admin', 'LoginController@validationUsers');

Route::group(['namespace' => 'Admin'], function()
{
    Route::get('/articles', array('as' => 'Articles', 'uses' => 'ArticleController@index'));
    Route::get('/articles/create', 'ArticleController@create');
    Route::post('/articles', 'ArticleController@store');
    Route::get('/articles/edit/{id}', 'ArticleController@edit');
    Route::put('/articles/update/{id}','ArticleController@update');
Route::delete('/articles/{id}','ArticleController@destroy');
    Route::get('/articles/{id}', 'ArticleController@show');
    Route::post('/showCreate', 'ArticleController@showCreate');
    Route::put('/showCreate', 'ArticleController@showCreate');
    Route::post('/editCreate', 'ArticleController@editCreate');
    Route::put('/editCreate', 'ArticleController@editCreate');

});


Route::get('/free', 'FreeController@index');
Route::get('/search', 'FreeController@search');
Route::get('/sort', 'FreeController@sort');




//Route::group(['namespace' => 'Free'], function()
//{
//    Route::get('/freeart', array('as' => 'Articles', 'uses' => 'FreeController@index'));
//
//    Route::get('/freeart/{id}', 'FreeController@show');
//
//});




    Route::get('/freeart', array('as' => 'Articles', 'uses' => 'FreeController@index'));

    Route::get('/freeart/{id}', 'FreeController@show');

;










