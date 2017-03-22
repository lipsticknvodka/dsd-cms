<?php
/**
 * Created by PhpStorm.
 * User: michelleprather
 * Date: 11/15/16
 * Time: 4:49 PM
 */

namespace App\Http\Controllers;

use App\Account;
use App\Hawb;
use App\TruckingDelivery;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\CfsDelivery;
use Illuminate\Support\Facades\DB;
use Excel;
use Illuminate\Support\Facades\Input;

class CfsDeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>
            [
                'show',
                'downloadExcel',
                'customerSearch',
                'customerSearchResult'
            ]
        ]);
    }

    public function index()
    {
        //
        $cfsDeliveries = CfsDelivery::orderBy('created_at', 'desc')->paginate(10);

//        dd($cfsDeliveries);

        return view('cfs.index', ['cfsDeliveries' => $cfsDeliveries]);
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $cfsDeliveries = CfsDelivery::find($id);

        $cfsDelivery = CfsDelivery::find($id);

//        $cfsDelivery->hawbs();
//        $account = Account::findOrFail($id);

        if(!$cfsDelivery){

            abort(404);
        }

        return view('cfs.show')->with('cfsDelivery', $cfsDelivery);


//        return view('account.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $cfs = CfsDelivery::findOrFail($id);

        $request->session()->put('cfs', $cfs);

        return redirect()->action('CfsDeliveryController@getCfsStep', ['step' => 1]);

        return view('cfs.edit', compact('cfsDelivery'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cfsDelivery = CFSDelivery::findOrFail($id);

        $cfsDelivery->delete();

        return redirect('/cfs')->with('success', 'CFS delivery was successfully deleted.');

    }

    public function getCfs()
    {

        return view('cfs.index');
    }

    public function postCfs(Request $request)
    {

//        $this->validate($request, [
////            'hawb' => 'required',
//            'mawb' => 'required',
//        ]);
////
        //OG SAVE CODE
        $cfs = CfsDelivery::create(['mawb' => $request->input('mawb')]);



        //NEW CODE TO SAVE ACCOUNT ID IN DB

//        $cfs = new CfsDelivery(
//            [
//                'mawb' => $request->input('mawb'),
////
//            ]);
//        $account = Account::find('id')->get();

//        $account = Account::pluck('name', 'id')->all();
//
//
//
//        $account_id = Account::where(['id', $account->id]);
//        $cfs->account = Input::get('account_id');;
//
//        $account = Account::all();

//        $account_id = Account;

//        $cfs->account()->associate($account);
//        $cfs->save($account);
        //END NEW CODE

        $request->session()->put('cfs', $cfs);


        return redirect()->action('CfsDeliveryController@getCfsStep', ['step' => 1]);

    }

    public function getCfsStep(Request $request, $step)
    {
        $cfs = DB::table('cfs_deliveries');

//        $cfs = CfsDelivery::all();

        $account = Account::pluck('name', 'id')->all();

//        $input = $request->all();

//        $cfs->account()->associate($account);
//        $cfs->account->save();
//        $account->save();

//        $cfsDelivery = CfsDelivery::find('id');

//        $hawb = Hawb::all();

        return view('cfs.step_'.$step, compact('account'), ['cfs' => $request->session()->get('cfs')]);
    }

    protected $lastStep = 3;

    public function postCfsStep(Request $request, $step)

    {
        switch ($step)
        {
            case 1:
                $rules = [
                    'mawb'=>'required',
//                    'acct_type'=>'required'
                ];
                break;
            case 2:
                $rules = [
                    'us_customs_code' => 'required|min:1|max:50',
//                    'pallet_ct' => 'required|min:1|max:3',
//                    'address_1' => 'required|min:2|max:50',
//                    'city' => 'required|min:2|max:50',
//                    'state' => 'required|min:2|max:50',
//                    'zip' => 'required|min:2|max:50',

                ];
                break;
            case 3:
                $rules = [

//                    'primary_contact' => 'required|min:2|max:50',
//                    'email' => 'required|min:2|max:50',
                ];
                break;
            default:
                abort(400, "No rules for this step!");
        }

        $this->validate($request, $rules);
//

        $request->session()->get('cfs')
            ->update($request->all())
        ;

        if ($step == $this->lastStep) {
//            return view('cfs.show')->withSuccess('CFS delivery was successfully added');
//            return redirect()->action('AccountsController@getAccountSuccess')->withSuccess('CFS delivery was successfully added');
            return redirect('/cfs')->with('success', 'CFS delivery was successfully added.');
        }


        return redirect()->action('CfsDeliveryController@getCfsStep', ['step' => $step+1]);
    }


    public function dashboard(){

        $cfsDeliveries = CfsDelivery::orderBy('created_at', 'desc')->paginate(5);

        $truckingDeliveries = TruckingDelivery::orderBy('created_at', 'desc')->paginate(5);

//        $cfsDeliveries = CfsDelivery::all();
//
        return view('dashboard', compact('cfsDeliveries','truckingDeliveries'));
    }

//
    public function addHawb($id, Request $request){

        $cfsDelivery = cfsDelivery::find($id);

        $cfsDelivery->hawbs()->create($request->all());

        return back();

//        }

    }



    public function closeHawb($id)
    {

        $hawb = Hawb::where('id', $id)->firstOrFail();

        $hawb->status = 'Closed';

        $hawb->save();

    }

    public function deleteHawb($id){

        $hawb = Hawb::findOrFail($id)->delete();

        return back();

        //not deleting from db

    }


    public function trashed(){

        $cfsDeliveries = CfsDelivery::onlyTrashed()->paginate(10);

        return view('cfs.trash', compact('cfsDeliveries', $cfsDeliveries));
    }

    public function restore($id){

        CfsDelivery::withTrashed()->where('id',$id)->restore();

        return back()->with('success', 'CFS delivery was successfully restored.');

    }

    public function permDelete($id){

        CfsDelivery::onlyTrashed()->where('id',$id)->forceDelete();

        return back()->with('success', 'CFS delivery has been permanently deleted.');
    }

    public function showOpen(){

        $cfsDeliveries = CfsDelivery::orderBy('created_at','desc')->paginate(10);

        return view('cfs/open',['cfsDeliveries' => $cfsDeliveries]);
    }

    public function downloadExcel($type)
    {
        $data = CfsDelivery::get()->toArray();

        return Excel::create('cfs-deliveries', function($excel) use ($data) {
            $excel->sheet('CFS Deliveries', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function customerSearch(){
        $cfsQuery = Input::get ( 'cfsQuery' );
        $cfs_deliveries = CfsDelivery::where('mawb','like','%'.$cfsQuery.'%')->paginate(10);


        //    return view('search-results',['trucking_deliveries'=>$trucking_deliveries]);

        if(count($cfs_deliveries) > 0)
            return view('search-results-cfs-list')->withDetails($cfs_deliveries)->withQuery ( $cfsQuery );
        else return view('freight-availability')->withMessage('No CFS details found. Please try your search again !');

    }

    public function customerSearchResult($id){

        $cfsDelivery = CfsDelivery::find($id);

//        $account = Account::findOrFail($id);

//        dd(TruckingDelivery::find($id)->exception);
//
//        if(!$cfsDelivery){
//
//            abort(404);
//        }

        return view('search-results-cfs')->with('cfsDelivery', $cfsDelivery);
    }

}