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
});
Route::resource('/region', 'RegionController');
Route::resource('/departement', 'DepartementController');
Route::resource('/commune', 'CommuneController');
Route::resource('/questionnaire', 'QuestionnaireController');
Route::resource('/article', 'ArticleController');
Route::resource('/user', 'UserController');
Route::post('/region/{id}', 'RegionController@update'
)->name('modifier.region');
Route::post('/departement/{id}', 'DepartementController@update'
)->name('modifier.departement');
Route::post('/commune/{id}', 'CommuneController@update'
)->name('modifier.commune');
Route::post('/user/{id}', 'UserController@update'
)->name('modifier.user');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
