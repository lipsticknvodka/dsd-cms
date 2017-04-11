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
use App\Account;
use App\CfsDelivery;
use App\TruckingDelivery;
//use App\User;
use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\SoftDeletes;

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

//Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

Route::group(['middleware' => 'admin'], function() {



});

Route::auth();

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

//Route::get('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@login']);

Route::get('/', 'HomeController@index');

// Does not hit second use to display data
Route::get('/dashboard', [
    'uses' => 'CfsDeliveryController@dashboard','TruckingDeliveryController@dashboard'
]);

//
//Route::get('/freight-availability', function(){
//
//    return view('freight-availability');
//
//});

Route::get('account', function(){
    $user = Auth::user();


    return view('account', compact('user'));
});

Route::get('/account/trash', 'AccountsController@trashed');


Route::get('/account/{id}/restore', 'AccountsController@restore');

//Why does get function work for this delete method?

Route::get('/account/{id}/permDelete','AccountsController@permDelete');

Route::any('/freight-availability/trucking', 'TruckingDeliveryController@customerSearch');

Route::get('/freight-availability/trucking/{id}', 'TruckingDeliveryController@customerSearchResult');

Route::any('/freight-availability/cfs', 'CfsDeliveryController@customerSearch');

Route::get('/freight-availability/cfs/{id}', 'CfsDeliveryController@customerSearchResult');

Route::any('/search-results-admin', 'HomeController@adminSearch');

Route::get('/search-results-admin/{id}', 'HomeController@adminSearchResult');

Route::get('/users', 'UserController@index');

Route::delete('/user/{id}', 'UserController@destroy');

//Route::delete('/user/{id}', 'HomeController@deleteUser');

Route::get('/register', function(){

//    $this->middleware('auth');

    return view('auth.register');
});

//
//Route::any('/freight-availability/cfs',function(Request $request){
//
////    $mawb = Input::get('cfsQuery');
////    $hawb = Input::get('cfsQuery2');
////
////    $cfsDelivery = (new cfsDelivery)->newQuery(); //where Unit is the model
////
////    if($request->has('cfsQuery'){
////    $cfsDelivery->where('mawb',$request->mawb)
////    }
////    if($request->has('cfsQuery2'){
////    $cfsDelivery->where('hawb',$request->hawb)
////    }
////        //go on until the end
//////    $units = $unit->get();
////    return view('search-results', compact('cfsDelivery'));
//
//    $cfsQuery = Input::get ( 'cfsQuery' );
//    $cfsQuery2 = Input::get ( 'cfsQuery2' );
//    $cfs_deliveries = CfsDelivery::where('mawb','like','%'.$cfsQuery.'%')->andWhere('hawb','like','%'.$cfsQuery2.'%')->paginate(10);
////    return view('search-results',['trucking_deliveries'=>$trucking_deliveries]);
//
//    if(count($cfs_deliveries) > 0)
//        return view('search-results')->withDetails($cfs_deliveries)->withQuery ( $cfsQuery );
//    else return view('freight-availability')->withMessage('No Details found. Please try your search again !');
//});







//Route::get('exportPDF', 'MaatwebsiteDemoController@exportPDF');

Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
//
//Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');


Route::get('/history', 'AccountsController@history');

//WORKING ROUTE - KINDA HACKY
//Route::get('/history', 'RevisionController@showRevisions');

Route::resource('account', 'AccountsController');

Route::get('/account/{id}', 'AccountsController@show');

Route::post('/account/{id}', 'AccountsController@update');

Route::post('/account/{id}/file', 'AccountsController@addRate');

Route::delete('rate/{id}','AccountsController@deleteRate');
//Route::post('/account/{id}/delete', 'AccountsController@destroy');

Route::get('/account', [
    'uses' => 'AccountsController@index', 'AccountsController@getAccount','AccountsController@postAccount','AccountsController@getEditAccount','AccountsController@postEditAccount',
    'as'   => 'account.index',
]);

Route::post('account', 'AccountsController@postAccount');

Route::get('/account/downloadExcel/{type}', 'AccountsController@downloadExcel');

//Route::get('downloadExcel/{type}', 'AccountsController@downloadExcel');

Route::get('account/step/{step}', 'AccountsController@getAccountStep')->where(['step' => '[1-3]']);

Route::post('account/step/{step}', 'AccountsController@postAccountStep')->where(['step' => '[1-3]']);

//Route::resource('account/{id}/{step}', 'AccountsController');

Route::get('account/{id}/edit', 'AccountsController@edit');

Route::get('account/{id}/edit/step/{step}', 'AccountsController@edit');

Route::get('account/{id}/edit/step/{step}', 'AccountsController@edit');

//Route::get('account/{id}/edit/step/{step}', 'AccountsController@getEditAccountStep')->where(['step' => '[1-3]']);

Route::post('account/{id}/edit/step/{step}', 'AccountsController@postEditAccountStep')->where(['step' => '[1-3]']);

//Route::get('account/{id}/delete', function($id){
//
//    $account = \App\Account::find($id);
//
//    $account->whereId($id)->delete();
//});

//Route::get('account/{id}/destroy','AccountsController@destroy');


//Route::get('/delete', 'AccountsController@delete');



//CFS ROUTES
//Route::resource('cfs', 'CFSController');
Route::get('/cfs/downloadExcel/{type}', 'CfsDeliveryController@downloadExcel');

Route::get('cfs/open', 'CfsDeliveryController@showOpen');

Route::get('/cfs/trash', 'CfsDeliveryController@trashed');

Route::get('/cfs/{id}/restore', 'CfsDeliveryController@restore');

Route::get('/cfs/{id}/permDelete','CfsDeliveryController@permDelete');

Route::post('/cfs/{id}/addHawb', 'CfsDeliveryController@addHawb');

Route::delete('hawb/{id}', 'CfsDeliveryController@deleteHawb');

Route::get('/cfs/{id}', 'CfsDeliveryController@show');

//Route::get('/cfs', [
//    'uses' => 'CfsDeliveryController@index', 'CfsDeliveryController@getCfs','CfsDeliveryController@postCfs',
//    'as'   => 'cfs.index',
//]);

Route::resource('cfs', 'CfsDeliveryController');



Route::post('cfs', 'CfsDeliveryController@postCfs');

Route::get('cfs/step/{step}', 'CfsDeliveryController@getCfsStep')->where(['step' => '[1-3]']);

Route::post('cfs/step/{step}', 'CfsDeliveryController@postCfsStep')->where(['step' => '[1-3]']);

Route::get('cfs/{id}/edit', 'CfsDeliveryController@edit');

Route::get('cfs/{id}/edit/step/{step}', 'CfsDeliveryController@edit');

Route::post('cfs/{id}/edit/step/{step}', 'CfsDeliveryController@postEditCfsStep')->where(['step' => '[1-3]']);


//TRUCKING ROUTES


//Route::group(['middleware' => 'web'], function() {

    Route::get('trucking/step/{step}', 'TruckingDeliveryController@getTruckingStep')->where(['step' => '[1-4]']);

    Route::post('trucking/step/{step}', 'TruckingDeliveryController@postTruckingStep')->where(['step' => '[1-4]']);
//});


Route::get('/trucking/downloadExcel/{type}', 'TruckingDeliveryController@downloadExcel');

Route::get('/trucking/trash', 'TruckingDeliveryController@trashed');

Route::get('/trucking/{id}/restore', 'TruckingDeliveryController@restore');

Route::get('/trucking/{id}/permDelete','TruckingDeliveryController@permDelete');

Route::get('trucking/open', 'TruckingDeliveryController@showOpen');

Route::get('/trucking/{id}', 'TruckingDeliveryController@show');

Route::get('/trucking', [
    'uses' => 'TruckingDeliveryController@index', 'TruckingDeliveryController@getTrucking','TruckingDeliveryController@postTrucking',
    'as'   => 'trucking.index',
]);
Route::resource('trucking', 'TruckingDeliveryController');

Route::post('trucking', 'TruckingDeliveryController@postTrucking');



Route::post('/trucking/{id}/photos/', 'TruckingDeliveryController@addPhoto');

Route::delete('photo/{id}', 'TruckingDeliveryController@deletePhoto');

Route::post('/trucking/{id}/exception', 'TruckingDeliveryController@addException');

Route::delete('/exception/{id}','TruckingDeliveryController@deleteException');

Route::post('/trucking/{id}/pod', 'TruckingDeliveryController@addPod');

Route::delete('/pod/{id}', 'TruckingDeliveryController@deletePod');

Route::get('trucking/{id}/edit', 'TruckingDeliveryController@edit');

Route::get('trucking/{id}/edit/step/{step}', 'TruckingDeliveryController@edit');

Route::get('downloadExcel/{type}', 'TruckingDeliveryController@downloadExcel');

//Route::get('dateFilterResults','TruckingController@index');

//UNPROTECTED ROUTES

Route::get('/', 'HomeController@index');

Route::get('/freight-availability', 'HomeController@freightAvailability');

Route::get('/services/air-freight','HomeController@airFreight');

Route::get('/services/ocean-freight','HomeController@oceanFreight');

Route::get('/services/cargo-screening','HomeController@cargoScreening');

Route::get('/services/warehousing','HomeController@warehousing');

Route::get('/services/trucking','HomeController@trucking');

Route::get('/services/hot-shot','HomeController@hotShot');

Route::get('/services','HomeController@services');

Route::get('/about','HomeController@about');

Route::get('/faq','HomeController@faq');

Route::get('/facilities','HomeController@facilities');

Route::get('/contact','HomeController@contact');

Route::get('/request-account','HomeController@requestAccount');

Route::get('/request-quote','HomeController@requestQuote');