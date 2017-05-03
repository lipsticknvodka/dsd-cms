<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class CfsDelivery extends Model
{
    //
    use \Venturecraft\Revisionable\RevisionableTrait;

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 250; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
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
        'account' =>'Account',
        'acct_name' => 'Account Name',
        'mawb' => 'MAWB',
        'arrival_date' => 'Arrival Date',
        'arrival_time' => 'Arrival Time',
        'est_avail_time' => 'Est. Availability',
        'pallet_ct' => 'Pallet Count',
        'master_weight' => 'Master Weight',
        'master_weight_type' => 'Master Weight Type',
        'us_customs_code' => 'US Customs Code',
        'last_free_day' => 'Last Free Date',
        'general_order' => 'General Order',
        'availability' => 'Availability',
        'deleted_at' => 'Deleted At',
        'pick_up_date' => 'Pick Up Date',
        'est_avail_date' => 'Estimated Availability Date',
        'piece_ct'=>'Piece Couny'
    );

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'cfs_deliveries';
//    protected $with = 'account';
    protected $fillable = [
        'account_id',
        'mawb',
//        'hawb',
        'piece_ct',
        'pallet_ct',
        'master_weight',
        'master_weight_type',
        'us_customs_code',
        'arrival_date',
        'arrival_time',
        'pick_up_time',
        'pick_up_date',
        'est_avail_date',
        'est_avail_time',
        'last_free_day',
        'general_order',
        'availability',
        'received_date',
        'received_time',
    ];

    public function account(){

        return $this->belongsTo('App\Account');
    }

    public function hawbs(){

        return $this->hasMany('App\Hawb', 'cfs_delivery_id');
    }

    public function getStatusAttribute()
    {

        if (!empty($this->pick_up_date && $this->pick_up_time)) return 'Closed';

        return 'Open';
    }
    

}
