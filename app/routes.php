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
    if(Auth::guest())
	    return Redirect::route('login.index');

    return Redirect::route('dashboard.page');
});


Route::resource('login','LoginController');
Route::get('logout',['as' => 'logout','uses' => 'LoginController@logout']);

/**
*	API routes
*		Articles
*		CCTVs
*	Accesible to the public
*/
Route::group(['prefix'=>'api'], function() {

	Route::group(['prefix'=>'v1'], function() {

		Route::get('tags/{id}/articles','TagController@index');
		Route::resource('articles', 'ArticleController');

		Route::resource('cctvs', 'CctvController');

	});

});


Route::group(['before' => 'auth'], function(){

	Route::get('dashboard', ['as'=>'dashboard.page', 'uses'=>'DashboardController@dashboardPage']);


    Route::resource('cctvs','CctvPageController');
    Route::resource('articles','ArticlePageController');
    Route::resource('users','UserPageController');
    Route::resource('tags','TagPageController');
    Route::get('tag/{id}/articles',['as' => 'tag.articles', 'uses' => 'TagPageController@indexArticle']);

});


Route::get('/test', function()
{
    $art = new \Alas\Repo\DbArticleRepo(new Article());
    $aa = $art->getTagsWithInArticleId(1);
    foreach ($aa as $a) {
        echo $a->name;
    }
});


App::missing(function($exception)
{
            return Response::view('errors.missing', array(), 404);
            //return Redirect::to('login');
});
