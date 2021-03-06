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
	return View::make('hello');
});

Route::controller('users', 'UserController');

Route::get('reports', 'ReportController@home');

Route::get('reports/all', 'ReportController@all');

Route::get('reports/developers', 'ReportController@developers');

Route::get('reports/search', 'ReportController@search');

Route::get('reports/results', 'ReportController@results');

Route::resource('groups', 'GroupController');

Route::resource('plugins', 'PluginsController');

Route::get('error', function() {
    try
    {
        $pdo = DB::connection('mysql')->getPdo();
    }
    catch(\PDOException $exception)
    {
        return Response::make('Database error! ' . $exception->getCode());
    }
    return 'all fine';
});