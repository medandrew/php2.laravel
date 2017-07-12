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
Route::any('/', function () {
    return view('welcome');
});
*/

/* Страницы сайта */
Route::any('/',          ['uses' => 'HomeController@index',     'as' => 'home']);
Route::any('/news',      ['uses' => 'HomeController@news',      'as' => 'news']);
Route::any('/shows',     ['uses' => 'HomeController@shows',     'as' => 'shows']);
Route::any('/events',    ['uses' => 'HomeController@events',    'as' => 'events']);
Route::any('/actors',    ['uses' => 'HomeController@actors',    'as' => 'actors']);
Route::any('/guestbook', ['uses' => 'HomeController@guestbook', 'as' => 'guestbook']);
Route::any('/contacts',  ['uses' => 'HomeController@feedback',  'as' => 'contacts']);

/* Страницы админ-панели */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/',         ['uses' => 'AdminController@index',     'as' => 'admin']);
    Route::get('news',      ['uses' => 'AdminController@news',      'as' => 'admin_news']);
    Route::get('shows',     ['uses' => 'AdminController@shows',     'as' => 'admin_shows']);
    Route::get('events',    ['uses' => 'AdminController@events',    'as' => 'admin_events']);
    Route::get('actors',    ['uses' => 'AdminController@actors',    'as' => 'admin_actors']);
    Route::get('guestbook', ['uses' => 'AdminController@guestbook', 'as' => 'admin_guestbook']);
    Route::get('contacts',  ['uses' => 'AdminController@feedback',  'as' => 'admin_contacts']);
});

/* Детальный просмотр элемента */
Route::get('/news/{record}/show',   ['uses' => 'ArticleController@show']);
Route::get('/events/{record}/show', ['uses' => 'EventController@show']);
Route::get('/actors/{record}/show', ['uses' => 'ActorController@show']);
Route::get('/shows/{record}/show',  ['uses' => 'ShowController@show']);


Route::group(['prefix' => 'admin'], function () {
    /* Создание, редактирование и удаление новостей */
    Route::get('news/create',           ['uses' => 'ArticleController@create']);
    Route::post('news/store',           ['uses' => 'ArticleController@store']);
    Route::get('news/{record}/edit',    ['uses' => 'ArticleController@edit']);
    Route::post('news/update/{record}', ['uses' => 'ArticleController@update']);
    Route::get('news/{record}/delete',  ['uses' => 'ArticleController@delete']);

    /* Создание, редактирование и удаление событий */
    Route::get('events/create',           ['uses' => 'EventController@create']);
    Route::post('events/store',           ['uses' => 'EventController@store']);
    Route::get('events/{record}/edit',    ['uses' => 'EventController@edit']);
    Route::post('events/update/{record}', ['uses' => 'EventController@update']);
    Route::get('events/{record}/delete',  ['uses' => 'EventController@delete']);

    /* Создание, редактирование и удаление актеров */
    Route::get('actors/create',           ['uses' => 'ActorController@create']);
    Route::post('actors/store',           ['uses' => 'ActorController@store']);
    Route::get('actors/{record}/edit',    ['uses' => 'ActorController@edit']);
    Route::post('actors/update/{record}', ['uses' => 'ActorController@update']);
    Route::get('actors/{record}/delete',  ['uses' => 'ActorController@delete']);

    /* Создание, редактирование и удаление репертуара */
    Route::get('shows/create',           ['uses' => 'ShowController@create']);
    Route::post('shows/store',           ['uses' => 'ShowController@store']);
    Route::get('shows/{record}/edit',    ['uses' => 'ShowController@edit']);
    Route::post('shows/update/{record}', ['uses' => 'ShowController@update']);
    Route::get('shows/{record}/delete',  ['uses' => 'ShowController@delete']);

    /* Создание, редактирование и удаление сообщений гостевой книги */
    Route::get('guestbook/create',           ['uses' => 'GuestbookController@create']);
    Route::post('guestbook/store',           ['uses' => 'GuestbookController@store']);
    Route::get('guestbook/{record}/edit',    ['uses' => 'GuestbookController@edit']);
    Route::post('guestbook/update/{record}', ['uses' => 'GuestbookController@update']);
    Route::get('guestbook/{record}/delete',  ['uses' => 'GuestbookController@delete']);

    /* Создание, редактирование и удаление сообщений обратной связи */
    Route::get('feedback/create',           ['uses' => 'FeedbackController@create']);
    Route::post('feedback/store',           ['uses' => 'FeedbackController@store']);
    Route::get('feedback/{record}/edit',    ['uses' => 'FeedbackController@edit']);
    Route::post('feedback/update/{record}', ['uses' => 'FeedbackController@update']);
    Route::get('feedback/{record}/delete',  ['uses' => 'FeedbackController@delete']);
});