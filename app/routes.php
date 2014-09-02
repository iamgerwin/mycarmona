<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('login.index');
});


Route::resource('login','LoginController');

/**
*	API routes
*		Articles
*		CCTVs
*	Accesible to the public
*/
Route::group(['prefix'=>'api'], function() {

	Route::group(['prefix'=>'v1'], function() {

		Route::get('articles/{id}/tags','TagController@index');
		Route::resource('articles', 'ArticleController');
		Route::resource('tags','TagController');

		Route::resource('cctvs', 'CctvController');

	});

});

/**
*	Autheticated user
*
*
*/
Route::group(['before' => ''], function(){

	Route::get('dashboard', ['as'=>'dashboard.page', 'uses'=>'DashboardController@dashboardPage']);
	Route::get('cctvs', ['as'=>'cctvs.page', 'uses'=>'DashboardController@cctvsPage']);
	Route::get('article', ['as'=>'articles.page', 'uses'=>'DashboardController@articlesPage']);

	Route::get('article/new', ['as'=>'new.article.page', 'uses'=>'DashboardController@newArticlePage']);
	Route::get('cctv/new', ['as'=>'new.cctv.page', 'uses'=>'DashboardController@newCctvPage']);

	Route::get('cctvs/{id}', ['as'=>'cctv.page', 'uses'=>'DashboardController@cctvPage']);
	Route::get('article/{id}', ['as'=>'article.page', 'uses'=>'DashboardController@articlePage']);

});


Route::get('/test', function()
{
	return Tag::with('articles')->get();
});

