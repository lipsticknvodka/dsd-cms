<?php

namespace App;


//use Venturecraft\Revisionable;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;




class Account extends Model
{
    //
    use \Venturecraft\Revisionable\RevisionableTrait;



//    use \bootRevisionableTrait;

//    public static function boot()
//    {
//        parent::boot();
//    }
    protected $guarded = [];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 250; //Maintain a maximum of 100 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    protected $revisionNullString = 'nothing';
    protected $revisionUnknownString = 'unknown';

    public function identifiableName(){
        return $this->name;
    }

    protected $dontKeepRevisionOf = array(
        'updated_at',
//        'created_at',
//        'deleted_at'
    );



    protected $revisionFormattedFieldNames = array(
        'account' => 'Account',
        'account_no' => 'Account No.',
        'name' => 'Company Name',
        'acct_type' => 'Account Type',
        'bill_to' => 'Bill To',
        'attn_to' => 'Attention To',
        'address_1' => 'Address 1',
        'address_2' => 'Address 2',
        'city' => 'City',
        'state' => 'State',
        'zip' => 'Zip',
        'phone' => 'Phone',
        'fax' => 'Fax',
        'primary_contact' => 'Primary Contact',
        'email' => 'Email',
        'deleted_at' => 'Deleted At',
        'created_at' => 'Created At',
    );


//
//    public function revisions()
//    {
//        return $this->morphMany('App/Revision', 'revisions');
//    }

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'account_no',
        'name',
        'acct_type',
        'bill_to',
        'attn_to',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'primary_contact',
        'email',
    ];


//    public function categories()
//    {
//        return $this->belongsToMany('App\Category')
//            ->withTimestamps();
//    }

//    public function getRates_1Attribute($value){
//
//    return $this->directory . $value;
//
//    }

//    public function revisions(){
//
//        return $this->hasMany('\App\Revision');
//    }

    public function rates() {
        return $this->hasMany('App\Rate');

    }

    public function addRate(Rate $rate)
    {

        return $this->rates()->save($rate);

    }


    public function user()
    {
        return $this->hasOne('App\User');

    }

    public function users(){

        return $this->hasMany('App\User');
    }
//
//    public function truckingDeliveries()
//    {
//        return $this->belongsToMany('App\TruckingDeliveries');
//    }

//    public function truckingDeliveries()
//    {
//        return $this->hasMany('App\TruckingDeliveries');
//    }
//
    public function cfsDeliveries()
    {
        return $this->hasMany('App\CfsDelivery','account_cfs_deliveries', 'account_id', 'cfs_delivery_id');
    }

    public function truckingDeliveries()
    {
        return $this->hasMany('App\TruckingDelivery', 'account_trucking_deliveries', 'account_id');
    }

//    public function trucking_deliveries()
//    {
//        return $this->belongsToMany('App\TruckingDeliveries', 'account_trucking_delivery');
//    }

//    public function cfs_deliveries()
//    {
//        return $this->hasMany('App\CfsDeliveries','account_cfs_delivery');
//    }
}
