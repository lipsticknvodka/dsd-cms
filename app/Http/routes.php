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

//    if(Auth::check()){
//
//       return 'The user is logged in.';
//
//    }

//    $username = 'saadad';
//    $password = '123';
//
//    if(Auth::attempt(['username'=>$username, 'password'=>$password])){
//
//        return redirect()->intended();
//
//    }

});


Route::auth();

Route::get('/home', 'HomeController@index');




Route::get('account', 'AccountsController@getAccount');

Route::post('account', 'AccountsController@postAccount');

Route::get('account/step/{step}', 'AccountsController@getAccountStep')->where(['step' => '[1-3]']);

Route::post('account/step/{step}', 'AccountsController@postAccountStep')->where(['step' => '[1-3]']);

Route::get('account/done', 'AccountsController@getAccountDone');




Route::get('survey', 'SurveyController@getSurvey');

Route::post('survey', 'SurveyController@postSurvey');

Route::get('survey/step/{step}', 'SurveyController@getSurveyStep')->where(['step' => '[1-3]']);

Route::post('survey/step/{step}', 'SurveyController@postSurveyStep')->where(['step' => '[1-3]']);

Route::get('survey/done', 'SurveyController@getSurveyDone');