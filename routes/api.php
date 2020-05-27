<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/questionnaire/save',[
    'as' => 'questionnaire.save',
    'uses' => 'QuestionnaireController@storeQuestionnaire',
    'middleware' =>'cors'
]);
Route::post('/connexion',[
    'as' => 'connexion.user',
    'uses' => 'UserController@seConnecter',
    'middleware' =>'cors'
]);
Route::get('/articles/all',[
    'as' => 'article.list',
    'uses' => 'ArticleController@getAllAticle',
    'middleware' =>'cors'
]);
Route::post('/cas-suspect/save',[
    'as' => 'cassuspect.save',
    'uses' => 'CasSuspectController@store',
    'middleware' =>'cors'
]);
Route::post('/action-iec/save',[
    'as' => 'actioniec.save',
    'uses' => 'ActionIecController@store',
    'middleware' =>'cors'
]);
Route::post('/lieu-haut-risque/save',[
    'as' => 'lieuhautrisque.save',
    'uses' => 'LieuHautRisqueController@store',
    'middleware' =>'cors'
]);
Route::post('/logistique/save',[
    'as' => 'cassuspect.save',
    'uses' => 'LogistiqueController@store',
    'middleware' =>'cors'
]);
Route::post('/alerte/save',[
    'as' => 'alerte.save',
    'uses' => 'ArticleController@store',
    'middleware' =>'cors'
]);