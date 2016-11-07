<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Html;

use App\Http\Requests;

use App\Account;



class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('accounts.create-1');

        //STORE ACCOUNT DATA IN SESSION
//        $value = $request->session()->get('acct');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
//        switch ($step)
//        {
//            case 1:
//                $rules = ['account_no' => 'required|min:2|max:50'];
//                break;
//            case 2:
//                $rules = ['bill_to' => 'required|min:3'];
//                break;
//            case 3:
//                $rules = ['phone' => 'required|min:2|max:50'];
//                break;
//            default:
//                abort(400, "No rules for this step!");
//        }

//        $this->validate($request, $rules);
//
//        $request->session()->get('account')
//            ->update($request->all())
//        ;
////
//        if ($step == $this->lastStep) {
//            return redirect()->action('AccountsController@getAccountSuccess');
//        }
//
//        return redirect()->action('AccountsController@getAccountStep', ['step' => $step+1]);
        //SAVE TO DB : Method 1

//        return $request->all();


//        $account = Account::firstOrCreate(['account_no' => $request->input('account_no')]);//
//        $request->session()->put('account', $account);
//        $request->session(['accounts'=>'create account1']);

//        $request->session()->put('account');

//        Session::create('account');

//        Account::create($request->all());

//        return redirect->action('');
//        return redirect('/accounts/create');
// return view('accounts.create-'.$step, ['account' => $request->session()->get('account')]);
//       $step = Account;
//         return redirect()->action('AccountsController@getAccountStep', ['step' => $step+1]);

        //SAVE TO DB : Method 2
//        $account = new Account;
//
//        $account ->account_no= $request->account_no;
//
//        $account ->save();

////
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

//    public function getAccount()
//    {
////        $accounts = ['' => 'Select a Category'] + Account::lists('name', 'id')->all();
//
////        return view('accounts.create-1', compact('accounts'));
//        return view('accounts.create-1');
////        return view('accounts.index');
//    }
//
//
//    public function postAccount(Request $request)
//    {
////        $this->validate($request, [
////            'account_no' => 'required|account_no'
////        ]);
//
//        $account = Account::firstOrCreate(['account_no' => $request->input('account_no')]);
//
////            Session::put('account', $account);
////        $request->session()->put('account', $account);
//        $request->session(['account' => $account]);
//        return redirect()->action('AccountsController@getAccountStep', ['step' => 1]);
//
//    }
//
//
//
//    public function getAccountStep(Request $request, $step)
//    {
//        return view('accounts.create-'.$step, ['account' => $request->session()->get('account')]);
//    }
//
//    protected $lastStep = 3;
//
//    public function postAccountStep(Request $request, $step)
//    {
//        switch ($step)
//        {
//            case 1:
//                $rules = ['account_no' => 'required|min:2|max:50'];
//                break;
//            case 2:
////                $rules = ['bill_to' => 'required|min:3'];
//                break;
//            case 3:
////                $rules = ['phone' => 'required|in:Cats,Dogs'];
//                break;
//            default:
//                abort(400, "No rules for this step!");
//        }
//
//        $this->validate($request, $rules);
//
//        $request->session()->get('account')
//            ->update($request->all())
//
//        ;
//
//        if ($step == $this->lastStep) {
//            return redirect()->action('AccountsController@accountSuccess');
//        }
//
//        return redirect()->action('AccountsController@getAccountStep', ['step' => $step+1]);
//    }
//
//    public function accountSuccess(Request $request)
//    {
//
//        echo '<h1>Account Added</h1>';
//    }

    public function getAccount()
    {
        return view('account.index');
    }

    public function postAccount(Request $request)
    {
        $this->validate($request, [
            'account_no' => 'required'
        ]);

        $account = Account::firstOrCreate(['account_no' => $request->input('account_no')]);

        $request->session()->put('account', $account);

        return redirect()->action('AccountsController@getAccountStep', ['step' => 1]);
    }

    public function getAccountStep(Request $request, $step)
    {
        return view('account.step_'.$step, ['account' => $request->session()->get('account')]);
    }

    protected $lastStep = 3;

    public function postAccountStep(Request $request, $step)
    {
        switch ($step)
        {
            case 1:
                $rules = ['account_no' => 'required|min:2|max:50', 'name'=>'required', 'acct_type'=>'required'];
                break;
            case 2:
                $rules = ['bill_to' => 'required|min:2|max:50'];
                break;
            case 3:
                $rules = ['phone' => 'required|min:2|max:50'];
                break;
            default:
                abort(400, "No rules for this step!");
        }

        $this->validate($request, $rules);
//
        $request->session()->get('account')
            ->update($request->all())
        ;

        if ($step == $this->lastStep) {
            return redirect()->action('AccountsController@getAccountDone');
        }

        return redirect()->action('AccountsController@getAccountStep', ['step' => $step+1]);
    }

    public function getAccountDone()
    {
        return '<h1>Thanks! You have completed the survey</h1>';
    }
}
