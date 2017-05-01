<?php

namespace App\Http\Controllers;

use App\Account;
use App\CfsDelivery;
use App\Exception;
use App\Photo;
use App\Pod;
use App\TruckingDelivery;
use Illuminate\Support\Facades\Input;
use Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use GuzzleHttp\Psr7\UploadedFile;
//use Illuminate\Http\UploadedFile;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Excel;

use Carbon\Carbon;

class TruckingDeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>
           ['show',
               'customerSearch',
               'customerSearchResult']
        ]);
    }

    public function index()
    {
        //
//        $account = Account::all()->where('acct_type','=','Trucking');

//       $truckingDeliveries = TruckingDelivery::all()->reverse();

//        return view('trucking.index', compact(['account']));

        $truckingDeliveries = TruckingDelivery::orderBy('created_at', 'desc')->paginate(10);

        return view('trucking.index', ['truckingDeliveries' => $truckingDeliveries]);
//
    }

//    public function getAccounts(){
////        $accounts = Account::where('acct_type', true)->orderBy('name')->pluck('name', 'id');
////        $accounts = Account::where('acct_type', true)->orderBy('name')->lists('name', 'id');
//
//        return redirect()->action('TruckingDeliveryController@getTrucking');
//    }

    public function show($id)
    {
        $truckingDelivery = TruckingDelivery::find($id);

//        $account = Account::findOrFail($id);

//        dd(TruckingDelivery::find($id)->exception);
//
        if(!$truckingDelivery){

            abort(404);
        }

//        $pod = $truckingDelivery->pod();

//        $exception = $truckingDelivery->exception();
//        dd($exception);
//        dd($truckingDelivery->exception);
//        return view('trucking.show', compact(['truckingDelivery', $truckingDelivery], ['exception', $exception]));
//
        return view('trucking.show')->with('truckingDelivery', $truckingDelivery);


//        return view('account.show', compact('account'));
    }

    public function edit(Request $request, $id)
    {
        $trucking = TruckingDelivery::findOrFail($id);

        $request->session()->put('trucking', $trucking);

        return redirect()->action('TruckingDeliveryController@getTruckingStep', ['step' => 1]);

//        return view('trucking.edit', compact('truckingDelivery'));

    }

    public function destroy($id)
    {
        $truckingDelivery = TruckingDelivery::findOrFail($id);

        $truckingDelivery->delete();

        return redirect('/trucking')->with('success','Trucking delivery was successfully deleted.');

    }

    public function getTrucking()
    {


        return view('trucking.index');

    }

    public function postTrucking(Request $request)
    {

        $this->validate($request, [
            'ref_no' => 'required',
        ]);

//        AFTER DEPLOY WITH POSTICO, NULL ERROR RETURNED
        $trucking = TruckingDelivery::firstOrCreate(['ref_no' => $request->input('ref_no')]);

//        $trucking = TruckingDelivery::firstOrNew(['ref_no' => $request->input('ref_no')]);

//
        $request->session()->put('trucking', $trucking);


        return redirect()->action('TruckingDeliveryController@getTruckingStep', ['step' => 1]);

    }



    public function getTruckingStep(Request $request, $step)
    {
        $trucking = DB::table('trucking_deliveries');

        $account = Account::pluck('name', 'id')->all();
//            $account = Account::lists('name', 'id')->where('acct_type','=','Trucking');

        return view('trucking.step_'.$step, ['trucking' => $request->session()->get('trucking')], compact('account', $account));
//        return view('trucking.step_'.$step, ['trucking' => $request->session()->get('trucking')]);
    }

    protected $lastStep = 4;



    public function postTruckingStep(Request $request, $step)
    {


        switch ($step)
        {
            case 1:
                $rules = [
                    'ref_no'=>'required',
                    'account_id'=>'required',
                    'mawb'=>'required',
                    'hawb'=>'required'
                ];
                break;
            case 2:
                $rules = [
                    'shipper_name' => 'required',
                    'shipper_address_1' => 'required',
                    'shipper_city' => 'required',
                    'shipper_state' => 'required',
                    'shipper_zip' => 'required',
                    'destination_address_1' => 'required',
                    'destination_city' => 'required',
                    'destination_state' => 'required',
                    'destination_zip' => 'required',
                ];
                break;
            case 3:
                $rules = [
                    'pallet_exchange_qty' => 'required',
                    'pallet_shipper_qty' => 'required',
                    'piece_ct' => 'required',
                    'weight_no' => 'required',
                ];
                break;
            case 4:
                $rules = [
//                    'status' => 'required|min:2|max:50',
//                    'primary_contact' => 'required|min:2|max:50',
//                    'email' => 'required|min:2|max:50',
                ];
                break;
            default:
                abort(400, "No rules for this step!");
        }

        $this->validate($request, $rules);


        $request->session()->get('trucking')->update($request->all());

//        Session::get('trucking')->save($request->all());
//        $request->session()->get('trucking')->save($request->all());

        if ($step == $this->lastStep) {
//            return redirect()->action('AccountsController@getAccountDone');
            return redirect('/trucking')->with('success', 'Trucking delivery was successfully added.');
//            return redirect('/trucking/{id}')->with('success', 'Trucking delivery was successfully added.');
        }

        return redirect()->action('TruckingDeliveryController@getTruckingStep', ['step' => $step+1]);
    }

    public function addPhoto($id, Request $request){

        $this->validate($request, [

            'file'=> 'required|mimes:jpg,jpeg,png,bmp',

        ]);


        $photo = $this->makePhoto($request->file('file'));

        TruckingDelivery::find($id)->addPhoto($photo);

    }

    protected function makePhoto(UploadedFile $file){

        return Photo::named($file->getClientOriginalName())
            ->move($file);
    }

    public function deletePhoto($id){

        $photo = Photo::findOrFail($id)->delete();

        return back();    // Use of undefined constant back - assumed 'back'

    }

    public function addException($id, Request $request){

        $this->validate($request, [

            'file'=> 'required|mimes:pdf'

        ]);


        $exception = $this->makeException($request->file('file'));

        TruckingDelivery::find($id)->addException($exception);

    }

    protected function makeException(UploadedFile $file){

        return Exception::named($file->getClientOriginalName())
            ->move($file);
    }


    public function deleteException($id){

        $exception = Exception::findOrFail($id)->delete();

        return back();    // Use of undefined constant back - assumed 'back'

    }

    public function trashed(){

        $truckingDeliveries = TruckingDelivery::onlyTrashed()->latest()->paginate(10);

        return view('trucking.trash', compact('truckingDeliveries', $truckingDeliveries));
    }

    public function restore($id){

        TruckingDelivery::withTrashed()->where('id',$id)->restore();

        return back()->with('success', 'Trucking delivery was successfully restored.');

    }

    public function permDelete($id){

       TruckingDelivery::onlyTrashed()->where('id',$id)->forceDelete();

        return back()->with('success', 'Trucking delivery has been permanently deleted.');
    }

//    public function addException($id, Request $request){
//
//        $this->validate($request, [
//
//            'file'=> 'required|mimes:pdf',
//
//        ]);
//
//        $file = $request->file('file');
//
//        $name = time(). $file->getClientOriginalName();
//
//        $file->move('uploads/trucking/exceptions', $name);
//
//        $truckingDelivery = TruckingDelivery::find($id);
////
//        $truckingDelivery->exception()->create(['path'=>'/uploads/trucking/exceptions/'.$name]);
//    }

//    public function addException($id, Request $request){
//
//        $this->validate($request, [
//
////            'file'=> 'required|mimes:pdf',
//
//        ]);
//
//        //
//
////        $exception = $this->makeException($request->file('file'));
//
//        $exception = Exception::fromFile($request->file('file'));
////
//        TruckingDelivery::find($id)->addException($exception);
//
//    }


//    protected function makeException(UploadedFile $file){
//
//        return Exception::named($file->getClientOriginalName())
//            ->move($file);
//    }


//    public function deleteException($id){
//
//        $exception = Exception::find($id)->delete();
//
//        return back();    // Use of undefined constant back - assumed 'back'
//
//    }

//    public function deleteException($id){
//
//        $exception = Exception::findOrFail($id);
//
//        $exception->delete();
//
//    }

//    public function addPod($id, Request $request){
//
//        $this->validate($request, [
//
//            'file'=> 'required|mimes:pdf',
//
//        ]);
//
//        $file = $request->file('file');
//
//        $name = time(). $file->getClientOriginalName();
//
//        $file->move('uploads/trucking/pod', $name);
//
//        $truckingDelivery = TruckingDelivery::find($id);
////
//        $truckingDelivery->pod()->create(['path'=>'/uploads/trucking/pod/'.$name]);
//    }

    public function addPod($id, Request $request){

        $this->validate($request, [

//            'file'=> 'required|mimes:pdf',

        ]);

        $pod = $this->makePod($request->file('file'));

        TruckingDelivery::find($id)->addPod($pod);

    }

    protected function makePod(UploadedFile $file){

        return Pod::named($file->getClientOriginalName())
            ->move($file);
    }

    public function deletePod($id){

        $pod = Pod::findOrFail($id)->delete();

        return back();    // Use of undefined constant back - assumed 'back'

    }

    public function showOpen(){

        $truckingDeliveries = TruckingDelivery::orderBy('created_at','desc')->paginate(10);

        return view('trucking/open',['truckingDeliveries' => $truckingDeliveries]);
    }

    public function dashboard(){

//        $truckingDeliveries = TruckingDelivery::all()->paginate(1);
//
//        return view('dashboard', compact('truckingDeliveries', $truckingDeliveries));

        return view('dashboard', compact('truckingDeliveries'));
    }

    public function downloadExcel($type)
    {
        $data = TruckingDelivery::get()->toArray();

        $pod = Pod::get()->toArray();

        $exception = Exception::get()->toArray();

        return Excel::create('trucking-deliveries', function($excel) use ($data) {
            $excel->sheet('Trucking Deliveries', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function customerSearch(){
        $truckingQuery = Input::get ( 'truckingQuery' );
        $trucking_deliveries = TruckingDelivery::where('ref_no','like','%'.$truckingQuery.'%')->orWhere('mawb','like','%'.$truckingQuery.'%')->orWhere('hawb','like','%'.$truckingQuery.'%')->paginate(10);
//    return view('search-results',['trucking_deliveries'=>$trucking_deliveries]);

        if(count($trucking_deliveries) > 0)
            return view('search-results-trucking-list')->withDetails($trucking_deliveries)->withQuery ( $truckingQuery );
        else return view('freight-availability')->withMessage('No Details found. Please try your search again !');

    }

    public function customerSearchResult($id){

        $truckingDelivery = TruckingDelivery::find($id);

//        $account = Account::findOrFail($id);

//        dd(TruckingDelivery::find($id)->exception);
//
        if(!$truckingDelivery){

            abort(404);
        }

        return view('search-results-trucking')->with('truckingDelivery', $truckingDelivery);
    }
}
