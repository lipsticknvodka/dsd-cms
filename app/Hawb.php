<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Hawb extends Model
{
    use \Venturecraft\Revisionable\RevisionableTrait;

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 150; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    protected $revisionNullString = 'nothing';
    protected $revisionUnknownString = 'unknown';

    public function identifiableName(){
        return $this->name;
    }

    protected $dontKeepRevisionOf = array(
        'updated_at',
        'created_at',
        'deleted_at'
    );

    protected $revisionFormattedFieldNames = array(
        'hawb' => 'HAWB No.',
        'weight_no' => 'Weight',
        'weight_type' => 'Weight Type',
        'pallet_ct' => 'Pallet Count',
        'piece_ct' => 'Piece Count',
        'availability' => 'Availability',
        'co_name' => 'Company Name',
        'driver_name' => 'Driver Name',
        'close_date' => 'Transaction Closed Date',
        'closed_time' => 'Transaction Closed Time',
        'status' => 'Transaction Status',
        'deleted_at' => 'Deleted At',
        'created_at'=> 'Created At'
    );

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'cfs_deliveries_hawbs';

    protected $fillable = [
        'cfs_delivery_id',
        'hawb',
        'weight_no',
        'weight_type',
        'pallet_ct',
        'piece_ct',
        'availability',
        'co_name',
        'driver_name',
        'closed_date',
        'closed_time',
        'created_at' => 'Created At',
        'deleted_at' => 'Deleted At',
        'status'=>'Status'
    ];


    public function cfsDelivery(){
        return $this->belongsTo('App\CfsDelivery');
    }

//    public function getStatusAttribute()
//    {
//
//        if(!empty($this->co_name && $this->driver_name && $this->closed_date && $this->closed_time)) return 'Closed';
//
//        return 'Open';
//    }

    public function getStatusAttribute()
    {

        if (!empty($this->co_name && $this->driver_name)) return 'Closed';

        return 'Open';
    }
//    public function delete(){
//
////        Hawb::delete();
//
//        parent::delete();
//    }
}
