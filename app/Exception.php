<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
//use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Exception extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'exception_trucking_deliveries';

//    protected $primaryKey = 'trucking_delivery_id';

    protected $fillable = ['path', 'name'];

//    protected $file;

    protected $baseDir = 'uploads/trucking/exceptions';

//    protected static function boot()
//    {
//        static::creating(function($exception) {
//
//            return $exception->upload();
//        });
//    }

//    public function truckingDelivery() {
//
//        return $this->belongsTo('App\TruckingDelivery', 'trucking_delivery_id');
//    }
//
    public function truckingDelivery() {

        return $this->belongsTo('App\TruckingDelivery');
    }

//    public function truckingDelivery() {
//
//        return $this->belongsTo('App\TruckingDelivery', 'trucking_delivery_id', 'exception_id');
//    }

//    public static function fromFile(UploadedFile $file){
//
//        $exception = new static;
//
//        $exception->file = $file;
//
//       return $exception->fill([
//
//            'name'=> $exception->fileName(),
//
//            'path'=> $exception->filePath(),
//
////            'thumbnail_path'=> $exception->thumbnailPath(),
//        ]);
//    }

    public static function named($name)
    {
        return (new static)->saveAs($name);

//        $photo = new static;

//        $name = time(). $file->getClientOriginalName();

//        return $photo->saveAs($file->getClientOriginalName());

//        $photo->path = $photo->baseDir.'/'. $name;

//        $file->move($photo->baseDir, $name);

//        return $photo;
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

//    protected function makeThumbnail(){
//
//        Image::make($this->path)
//            ->fit(200)
//            ->save($this->thumbnail_path);
//
//        return $this;
//    }

    public function delete(){

        \File::delete([

            $this->path,

            $this->name

        ]);

        parent::delete();
    }

}