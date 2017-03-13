<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    //
//    use \Venturecraft\Revisionable\RevisionableTrait;
//
//    public function account(){
//        return $this->belongsToMany('\App\Account');
//    }

//    protected $table = ['revisions'];

    public function user(){
        return $this->belongsTo('\App\User');
    }

//
//    protected $revisionFormattedFieldNames = array(
//        'account_no' => 'Account No.',
//        'name' => 'Company Name',
//        'acct_type' => 'Account Type',
//        'bill_to' => 'Bill To',
//        'attn_to' => 'Attention To',
//        'address_1' => 'Address 1',
//        'address_2' => 'Address 2',
//        'city' => 'City',
//        'state' => 'State',
//        'zip' => 'Zip',
//        'phone' => 'Phone',
//        'fax' => 'Fax',
//        'primary_contact' => 'Primary Contact',
//        'email' => 'Email',
//        'deleted_at' => 'Deleted At'
//    );
////
//    public function fieldName()
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

    public function setKeyAttribute($value){

        $this->attributes['name'] = strtolower($value);
    }

    protected function getColumnNameAttribute($value) { return $this->attributes['acct_type']; }
    protected function setColumnNameAttribute($value) { $this->attributes['acct_type'] = ['Account Type']; }
    /**
     * Format field name.
     *
     * Allow overrides for field names.
     *
     * @param $key
     *
     * @return bool
     */
//    private function formatFieldName($key)
//    {
//        $related_model = $this->revisionable_type;
//        $related_model = new $related_model;
//        $revisionFormattedFieldNames = $related_model->getRevisionFormattedFieldNames();
//        if (isset($revisionFormattedFieldNames[$key])) {
//            return $revisionFormattedFieldNames[$key];
//        }
//        return false;
//    }
}
