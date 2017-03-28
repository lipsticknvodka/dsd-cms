<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Exception extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'exception_trucking_deliveries';

//    protected $primaryKey = 'exception_id';

    protected $fillable = ['path', 'name'];


    protected $baseDir = 'uploads/trucking/exceptions';

    protected static function boot()
    {
//        static::creating(function($exception) {
//
//            return $exception->upload();
//        });
    }

    public function truckingDelivery() {

        return $this->belongsTo('App\TruckingDelivery');
    }


    public static function named($name)
    {
        return (new static)->saveAs($name);

    }

    protected function saveAs($name){
        $this->name = sprintf("%s-%s", time(), $name);
        $this->path = sprintf ("%s/%s", $this->baseDir, $this->name);
//        $this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir, $this->name);

        return $this;
    }

    public function move(UploadedFile $file){
        $file->move($this->baseDir, $this->name);

//        $this->makeThumbnail();

        return $this;
    }

    public function delete(){

        \File::delete([

            $this->path,

            $this->name

        ]);

        parent::delete();
    }

}