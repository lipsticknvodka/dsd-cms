<?php

namespace App\Http\Controllers;

use App\Revision;

use Illuminate\Http\Request;

use App\Http\Requests;

class RevisionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showRevisions(Request $request){

        //SHOW ALL REVISIONS
//        $revisions = Revision::wherefind('old_value')->orderBy('created_at', 'desc')->paginate(25);

        $revisions = Revision::all();
//        $formattedName = $revisions->fieldName();
//        $output = Revision::where('key', $revisions->key)->FormatFieldNames();
//        protected function key(){
//
//
//        $revisions = Revision::with('revisionable')->all();

//        $revisions->fieldNames;
//

        return view('history',compact('revisions'));

    }

//        public function fieldName()
//    {
//       $key = [ 'account_no' => 'Account No.',
//           'name' => 'Company Name',
//           'acct_type' => 'Account Type',
//           'bill_to' => 'Bill To',
//           'attn_to' => 'Attention To',
//           'address_1' => 'Address 1',
//           'address_2' => 'Address 2',
//           'city' => 'City',
//           'state' => 'State',
//           'zip' => 'Zip',
//           'phone' => 'Phone',
//           'fax' => 'Fax',
//           'primary_contact' => 'Primary Contact',
//           'email' => 'Email',
//           'deleted_at' => 'Deleted At'];
//
//
//    }

}
