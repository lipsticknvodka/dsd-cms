<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = [
        'account_no',
        'name',
        'acct_type',
        'bill_to',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'primary_contact',
        'email'
    ];
}
