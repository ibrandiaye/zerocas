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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Route::resource('/region', 'RegionController')->middleware('auth');
Route::resource('/departement', 'DepartementController')->middleware('auth');
Route::resource('/commune', 'CommuneController');
Route::resource('/questionnaire', 'QuestionnaireController')->middleware('auth');
Route::resource('/article', 'ArticleController')->middleware('auth');
Route::resource('/user', 'UserController')->middleware('auth');
Route::resource('/article', 'ArticleController')->middleware('auth');
Route::post('/region/{id}', 'RegionController@update'
)->name('modifier.region')->middleware('auth');
Route::post('/departement/{id}', 'DepartementController@update'
)->name('modifier.departement')->middleware('auth');
Route::post('/commune/{id}', 'CommuneController@update'
)->name('modifier.commune')->middleware('auth');
Route::post('/user/{id}', 'UserController@update'
)->name('modifier.user')->middleware('auth');
Route::get('/article/{id}/destroy', 'ArticleController@destroy'
)->name('article.article')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
