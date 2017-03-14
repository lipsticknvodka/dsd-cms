<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;
class TruckingDelivery extends Model
{
    //
    use \Venturecraft\Revisionable\RevisionableTrait;

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;

    public function identifiableName()
    {
        return $this->name;
    }

    protected $dontKeepRevisionOf = array(
        'updated_at',
        'created_at',
        'deleted_at'
    );

    protected $revisionFormattedFieldNames = array(
        'acct_name' => 'Account Name',
        'ref_no' => 'Reference No.',
        'trans_type' => 'Transaction Type',
        'mawb' => 'MAWB',
        'hawb' => 'HAWB',
        'received_date' => 'Received Date',
        'received_time' => 'Received Time',
        'overs_shorts_damages' => 'Overs/Shorts/Damages',
        'shipper_name' => 'Shipper Name',
        'shipper_address_1' => 'Shipper Address 1',
        'shipper_address_2' => 'Shipper Address 2',
        'shipper_city' => 'Shipper  City',
        'shipper_state' => 'Shipper State',
        'shipper_zip' => 'Shipper Zip',
        'shipper_contact' => 'Shipper Contact',
        'shipper_phone' => 'Shipper ',
        'destination_address_1' => 'Destination Address 1',
        'destination_address_2' => 'Destination Address 2',
        'destination_city' => 'Destination City',
        'destination_state' => 'Destination State',
        'destination_zip' => 'Destination Zip',
        'location_address_1' => 'Current Location Address 1',
        'location_address_2' => 'Current Location Address 2',
        'location_city' => 'Current Location City',
        'location_state' => 'Current Location State',
        'location_zip' => 'Current Location Zip',
        'driver' => 'Driver',
        'pallet_exchange_qty' => 'Pallet Exchange Qty',
        'pallet_shipper_qty' => 'Pallet Shipper Qty',
        'piece_ct' => 'Piece Count',
        'weight_no' => 'Weight',
        'weight_type' => 'Weight Type',
        'status' => 'Delivery Status',
        'received_by' => 'Received By',
        'trans_closed_date' => 'Transaction Closed Date',
        'trans_closed_time' => 'Transaction Closed Time',
//        'deleted_at' => 'Deleted At'
    );

    use SoftDeletes;

    protected $dates = ['deleted_at'];

//    public function photos(){
//
//        return $this->hasMany('App\Photo');
//    }

//public function addPhoto(Photo $photo){
//
//    return $this->photos()->save($photo);
//
//}


    /** Find Trucking Delivery by id
     * @param $id
     *
     *
     * **/

    public static function locatedAt($id)
    {
        return static::where(compact($id))->first();

    }

    public function photos()
    {

        return $this->hasMany('App\Photo', 'trucking_delivery_id');
    }

    public function addPhoto(Photo $photo)
    {

        return $this->photos()->save($photo);

    }

    public function exception()
    {

        return $this->hasOne('App\Exception', 'trucking_delivery_id');
    }

    public function addException(Exception $exception)
    {

        return $this->exception()->save($exception);

    }

    public function pod()
    {

        return $this->hasOne('App\Pod', 'trucking_delivery_id');
    }

    public function addPod(Pod $pod)
    {

        return $this->pod()->save($pod);

    }

    protected $fillable = [
        'account_id',
        'ref_no',
        'trans_type',
        'mawb',
        'hawb',
        'received_date',
        'received_time',
        'shipper_name',
        'shipper_address_1',
        'shipper_address_2',
        'shipper_city',
        'shipper_state',
        'shipper_zip',
        'shipper_contact',
        'shipper_phone',
        'destination_address_1',
        'destination_address_2',
        'destination_city',
        'destination_state',
        'destination_zip',
        'location_address_1',
        'location_address_2',
        'location_city',
        'location_state',
        'location_zip',
        'overs_shorts_damages',
        'driver',
        'pallet_exchange_qty',
        'pallet_shipper_qty',
        'piece_ct',
        'weight_no',
        'weight_type',
        'cargo_status',
        'pick_up_date',
        'at_dsd_date',
        'out_for_delivery_date',
        'received_by',
        'trans_closed_date',
        'trans_closed_time',
        'exception_id'
    ];

    public function getAvailabilityAttribute()
    {

//        $this->attributes['availability'] = strtolower($request);

        if (!empty($this->received_by && $this->trans_closed_date && $this->trans_closed_time && $this->pod)) return 'Closed';
//        if (!empty($this->received_by && $this->trans_closed_date  )) return 'Closed';

        return 'Open';
    }

//
//    public function account(){
//
//        return $this->belongsToMany('App\Account');
//    }

    public function account()
    {

//        return $this->belongsTo('App\Account', 'account_trucking_deliveries');

        return $this->belongsTo('App\Account');
    }




//    use \Venturecraft\Revisionable\RevisionableTrait;
//
//    protected $revisionCreationsEnabled = true;
//
//    public function revisionHistory()
//    {
//
//
//        return $this->morphMany('\Venturecraft\Revisionable\Revision', 'revisionable');
//    }

//    public function account()
//    {
//        return $this->belongsTo('App\Account');
//    }


}
