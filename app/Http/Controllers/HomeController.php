<?php

namespace App\Http\Controllers;

use App\Account;
use App\CfsDelivery;
use App\Hawb;
use App\Http\Requests;
use App\TruckingDelivery;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function freightAvailability()
    {
        return view('/freight-availability');
    }

    public function airFreight(){
        return view('/services/air-freight');

    }

    public function cargoScreening(){
        return view('/services/cargo-screening');

    }

    public function trucking(){
        return view('/services/trucking');

    }

    public function warehousing(){
        return view('/services/warehousing');

    }

    public function hotShot(){
        return view('/services/hot-shot');

    }

    public function oceanFreight(){
        return view('/services/ocean-freight');

    }

    public function services(){
        return view('/services/all');

    }

    public function about(){
        return view('/about');

    }

    public function faq(){
        return view('/faq');

    }

    public function facilities(){
        return view('/facilities');

    }

    public function contact(){
        return view('/contact');

    }

    public function requestQuote(){
        return view('/request-quote');

    }

    public function requestAccount(){
        return view('/request-account');

    }

    public function sendQuoteRequest(Request $request){
        $token = $request->input('g-recaptcha-response');
        dd($token);
    }

    public function adminSearch(){
        $adminQuery = Input::get ( 'adminQuery' );
        $trucking_deliveries = TruckingDelivery::where('ref_no','like','%'.$adminQuery.'%')->orWhere('mawb','like','%'.$adminQuery.'%')->orWhere('hawb','like','%'.$adminQuery.'%')->paginate(10);
//    return view('search-results',['trucking_deliveries'=>$trucking_deliveries]);
        $cfs_deliveries = CfsDelivery::where('mawb','like','%'.$adminQuery.'%')->paginate(10);

        $cfs_hawb = Hawb::where('hawb','like','%'.$adminQuery.'%')->paginate(10);

        $account = Account::where('account_no','like','%'.$adminQuery.'%')->orWhere('name','like','%'.$adminQuery.'%')->paginate(10);

        if(count($trucking_deliveries) > 0)
            return view('search-results-admin-list')->withDetails($trucking_deliveries)->withQuery ( $adminQuery );

        elseif(count($cfs_deliveries) > 0)
            return view('search-results-admin-cfs-list')->withDetails($cfs_deliveries)->withQuery ( $adminQuery );
//
        elseif(count($cfs_hawb) > 0)
            return view('search-results-admin-cfs-hawb-list')->withDetails($cfs_hawb)->withQuery ( $adminQuery );

        elseif(count($account) > 0)
            return view('search-results-account-list')->withDetails($account)->withQuery ( $adminQuery );


        else return view('search-results-admin-list')->withMessage('No Details found. Please try your search again !');

    }

    public function adminSearchResult($id){

        $truckingDelivery = TruckingDelivery::find($id);

//        $account = Account::findOrFail($id);

//        dd(TruckingDelivery::find($id)->exception);
//
        if(!$truckingDelivery){

            abort(404);
        }

        return view('search-results-admin')->with('truckingDelivery', $truckingDelivery);
    }

    public function users(){

        $users = User::all();

        return view('/users', compact($users, 'users'));
    }

    public function deleteUser($id){

        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/users')->with('success', 'User was successfully deleted.');
    }

//    public function adminSearch(){
//        $truckingQuery = Input::get ( 'truckingQuery' );
//        $trucking_deliveries = TruckingDelivery::where('ref_no','like','%'.$truckingQuery.'%')->orWhere('mawb','like','%'.$truckingQuery.'%')->orWhere('hawb','like','%'.$truckingQuery.'%')->paginate(10);
////    return view('search-results',['trucking_deliveries'=>$trucking_deliveries]);
//
//        if(count($trucking_deliveries) > 0)
//            return view('search-results-admin-list')->withDetails($trucking_deliveries)->withQuery ( $truckingQuery );
//        else return view('freight-availability')->withMessage('No Details found. Please try your search again !');
//
//    }
//
//    public function adminSearchResult($id){
//
//        $truckingDelivery = TruckingDelivery::find($id);
//
////        $account = Account::findOrFail($id);
//
////        dd(TruckingDelivery::find($id)->exception);
////
//        if(!$truckingDelivery){
//
//            abort(404);
//        }
//
//        return view('search-results-admin')->with('truckingDelivery', $truckingDelivery);
//    }
}
