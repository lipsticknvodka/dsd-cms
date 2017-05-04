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


use Illuminate\Support\Facades\Mail;
//use Mail;

use Session;


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

    public function postContact(Request $request) {
//        $token = $request->input('g-recaptcha-response');
//        dd($token);

        $this->validate($request,[
//            'name' => 'required',
//            'email' => 'required|email',
//            'phone' => 'required',
//            'company' => 'required',
//            'subject' => 'required',
//            'messageBody' => 'required',
        ]);

        $data = array(

            'name' => $request->inputName,
            'email' =>  $request->inputEmail,
            'phone' =>  $request->inputPhone,
            'company' =>  $request->inputCompanyName,
            'recipient' =>  $request->recipient,
            'messageBody' =>  $request->inputMessage,
        );
//
        $recipient = array(
//            'michelleprather@gmail.com'=>$request->mailTo == 'air-freight',
//            'evelyn@dsdcompanies.com' ,'jovita@dsdcompanies.com'=>$request->mailTo == 'general',


            'general'=>'evelyn@dsdcompanies.com, jovita@dsdcompanies.com', //general

            'air-freight'=>'carlos@dsdcompanies.com', //Air Freight
            'ocean-freight'=>'jose@dsdcompanies.com', //Ocean Freight/Intermodal
            'trucking-pick-up'=>'roberto@dsdcompanies.com', //Trucking-Pick up ??
            'trucking-deliveries'=>'simon@dsdcompanies.com', //Trucking-Deliveries ??
            // 'hot-shot'=>'',
            'warehousing'=>'fausto@dsdcompanies.com', //Warehousing - Carlos ???
            'cargo-screening'=>'edbuccio@dsdcompanies.com', //Cargo Screening

        );
//
////        $exploded_recipients = explode(",", 'recipient');
//////
////        foreach($exploded_recipients as $value) {
//
//            $email_to = $recipient;

            Mail::send('emails.contact', $data, function ($message) use ($data, $recipient) {
                $message->from($data['email']);
                $message->to($recipient);
                $message->subject('You have a new contact form inquiry.');
            });
//        }
//        Session::flash('success','Your contact request has been sent.');

//        return view('request-quote')->withMessage('successful email');

        return redirect('contact')->with('success', 'Your contact form inquiry has been sent.');

    }


    public function requestQuote(){
        return view('/request-quote');

    }

    public function postRequestQuote(Request $request) {
//        $token = $request->input('g-recaptcha-response');
//        dd($token);

        $this->validate($request,[
//            'name' => 'required',
//            'email' => 'required',
//            'phone' => 'required',
//            'shipType' => 'required',
//            'length1' => 'required',
//            'length2' => 'required',
//            'length3' => 'required',
//            'weight' => 'required',
//            'numPieces' => 'required',
//            'originZip' => 'required',
//            'destinationZip' => 'required',
        ]);

        $data = array(

            'name' => $request->inputName,
            'email' =>  $request->inputEmail,
            'phone' =>  $request->inputPhone,
            'shipType' =>  $request->inputShipType,
            'length1' =>  $request->inputLength_1,
            'width1' =>  $request->inputWidth_1,
            'height1' =>  $request->inputHeight_1,
            'length2' => $request->inputLength_2,
            'width2' => $request->inputWidth_2,
            'height2' => $request->inputHeight_2,
            'length3' =>  $request->inputLength_3,
            'width3' => $request->inputWidth_3,
            'height3' =>  $request->inputHeight_3,
            'weight' =>  $request->inputWeight,
            'numPieces' =>  $request->inputNumPieces,
            'originZip' =>  $request->inputOriginZip,
            'destinationZip' =>  $request->inputDestinationZip,
            'comments' =>  $request->comments,
        );

        Mail::send('emails.request-quote', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('michelleprather@gmail.com');
            $message->subject('You have a new quote request');
        });

//        Session::flash('success','Your freight quote request has been sent.');

//        return view('request-quote')->withMessage('successful email');

//        return redirect()->url('request-quote');
        return redirect('request-quote')->with('success', 'Your freight quote request has been sent.');

    }


    public function requestAccount(){
        return view('/request-account');

    }

    public function postRequestAccount(Request $request) {
        $token = $request->input('g-recaptcha-response');
        dd($token);

        $this->validate($request,[
//            'name' => 'required',
//            'email' => 'required|email',
//            'phone' => 'required',
//            'company' => 'required',
//            'service_type' => 'required',

        ]);

        $data = array(

            'name' => $request->inputName,
            'email' =>  $request->inputEmail,
            'phone' =>  $request->inputPhone,
            'company' =>  $request->inputCompany,
            'service_type' =>  $request->inputServiceType,
            'comments' =>  $request->comments
        );

        Mail::send('emails.request-account', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('michelleprather@gmail.com');
            $message->subject('You have a new account request');
        });

//        Session::flash('success','Your account request has been sent.');

//        return view('request-quote')->withMessage('successful email');

//        return redirect()->withMessage('success');

        return redirect('request-account')->with('success', 'Your account request has been sent.');

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
