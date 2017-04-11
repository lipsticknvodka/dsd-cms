<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

use Illuminate\Html;

use App\Http\Requests;

use App\Account;

use App\Revision;

use DB;

use Excel;

use PhpParser\Node\Expr\Empty_;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AccountsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::orderBy('created_at', 'desc')->paginate(10);

        return view('account.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        return view('accounts.create-1');

        //STORE ACCOUNT DATA IN SESSION
//        $value = $request->session()->get('acct');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $id)
    {

        $input = $request->all();


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show(Account $account)
//    {
//        return view('account.show', compact('account'));
//    }

    public function show(Request $request, $id)
    {


//
        $account = Account::find($id);

        if(!$account){

            abort(404);
        }

        return view('account.show')->with('account', $account);

//        $account = Account::findOrFail($id);
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
        $account = Account::findOrFail($id);

        $request->session()->put('account', $account);

        return redirect()->action('AccountsController@getAccountStep', ['step' => 1]);

        return view('account.edit', compact('account'));

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
//           $request->session()->get('account')->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::findOrFail($id);

        $account->delete();

        return redirect('/account')->with('success', 'Account was successfully deleted.');

//        $account = Account::findOrFail($id);
//
//        $account->delete();

//        \Session::flash('flash_message_delete','Account successfully deleted.');

//        return redirect('/account');


    }

//
    public function getAccount()
    {

        return view('account.index');
//
    }

    public function postAccount(Request $request)
    {

            $this->validate($request, [
                'account_no' => 'required',
            ]);

            $account = Account::firstOrCreate(['account_no' => $request->input('account_no')]);


            $request->session()->put('account', $account);


            return redirect()->action('AccountsController@getAccountStep', ['step' => 1]);

    }

    public function getAccountStep(Request $request, $step)
    {
        $accounts = \DB::table('accounts')->lists('name', 'id');

//        $countries = \DB::table('countries')->lists('name', 'id');

//        return view('account.step_'.$step, ['account' => $request->session()->get('account')])->with(['accounts' => $accounts],['countries' => $countries]);
//        return view('account.step_'.$step, ['account' => $request->session()->get('account')])->with('accounts', $accounts);
        return view('account.step_'.$step, ['account' => $request->session()->get('account')]);
    }

    protected $lastStep = 3;

    public function postAccountStep(Request $request, $step)
    {
//

        switch ($step)
        {
            case 1:
                $rules = [
                    'account_no' => 'required|min:2|max:50',
                    'name'=>'required',
                    'acct_type'=>'required'
                ];
                break;
            case 2:
                $rules = [
//                    'bill_to' => 'required|min:2|max:50',
//                    'address_1' => 'required|min:2|max:50',
//                    'city' => 'required|min:2|max:50',
//                    'state' => 'required|min:2|max:50',
//                    'zip' => 'required|min:2|max:50',

                ];
                break;
            case 3:
                $rules = [
                    'phone' => 'required|min:2|max:50',
                    'primary_contact' => 'required|min:2|max:50',
                    'email' => 'required|min:2|max:50',
                ];
                break;
            default:
                abort(400, "No rules for this step!");
        }

        $this->validate($request, $rules);

        $request->session()->get('account')
            ->update($request->all())
        ;

        if ($step == $this->lastStep) {
            return redirect('account')->with('success', 'Account was successfully added.');
//            return redirect()->action('AccountsController@show');
        }


        return redirect()->action('AccountsController@getAccountStep', ['step' => $step+1]);
    }

//    public function addRate($id, Request $request){
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
//        $file->move('uploads/rates', $name);
//
//        $account = Account::find($id);
////
////        $rate = $this->makePhoto($request->file('file'));
//        $account->rates()->create(['path'=>'/uploads/rates/'.$name]);
//    }
//
////    protected function makePhoto(UploadedFile $rate){
////
////
////    }

    public function addRate($id, Request $request){

        $this->validate($request, [

            'file'=> 'required|mimes:pdf',

        ]);


        $rate = $this->makeRate($request->file('file'));

       Account::find($id)->addRate($rate);

    }

    protected function makeRate(UploadedFile $file){

        return Rate::named($file->getClientOriginalName())
            ->move($file);
    }

    public function deleteRate($id){

        $rate = Rate::findOrFail($id)->delete();

         return back();

}

    public function trashed(){

        $accounts = Account::onlyTrashed()->paginate(10);

        return view('account.trash', compact('accounts', $accounts));
    }

     public function restore($id){

         Account::withTrashed()->where('id',$id)->restore();

         return back()->with('success', 'Account was successfully restored.');

    }

    public function permDelete($id){

        Account::onlyTrashed()->where('id',$id)->forceDelete();

        return back()->with('success', 'Account has been permanently deleted.');
    }




        public function history(){
//            $revisions = Revision::latest()->first();


//            $revisions->userResponsible();
//        $account = Account::all();

//        dd($revisions);

//        $history = $account->revisionHistory;
            $revisions = \Venturecraft\Revisionable\Revision::orderBy('created_at', 'desc')->paginate(10);
//            $account = Account::first();
//            $revisions = $account->RevisionHistory;
//            $revisions = Revision::latest()->first();
//        $revisions = Revision::all();
//$revisions = $request->get('revisions');
//        dd($revisions);

        return view('history', compact('revisions'));

        }

    public function downloadExcel($type)
    {
        $account = Account::get()->toArray();

        $rates = Rate::get()->toArray();

        return Excel::create('dsd-account', function($excel) use ($account) {
            $excel->sheet('DSD Accounts', function($sheet) use ($account)
            {
                $sheet->fromArray($account);
            });
//            $excel->sheet('DSD Accounts Rates', function($sheet) use($rates) {
//                $sheet->fromArray($rates);
//            });
        })->download($type);

    }
//
}
