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

Route::any('/', 'IndexController@index');
Route::get('index/{id}','IndexController@show');
Route::get('/show/{id}/{name}','IndexController@show');
Route::get('/showLatestNews','IndexController@showLatestNews');
Route::get('/showArticle/{id}','IndexController@showArticlesToCategories');

Route::get('/page','PageController@index');
Route::get('/category_page','PageController@showCategories');
Route::get('/create','PageController@create');
Route::get('/edit/{id}','PageController@edit');
Route::post('/update/{id}','PageController@update');
Route::get('/delete/{id}','PageController@delete');
Route::post('/store','PageController@store');

Route::auth();

Route::get('/admin', 'AdminPageController@index');

//пути для отображения модалок для feedback
Route::get('/modbox1', function()
{
    return view('modbox/modbox1');
});
//обработка и вывод feedback-сообщений
Route::post('/feedback', 'FeedbackController@store');
Route::get('/feedback', 'FeedbackController@index');
Route::post('/feedback/delete','FeedbackController@delete');

Route::get('/gallery', 'GalleryController@index');
Route::post('/gallery', 'GalleryController@store');
Route::get('/gallery/delete/{id}', 'GalleryController@delete');
Route::get('/gallery/show', 'GalleryController@show');