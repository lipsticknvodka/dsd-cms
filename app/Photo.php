<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

//use Intervention\Image\Facades\Image;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Image;

class Photo extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'photos_trucking_deliveries';

    protected $fillable = ['path', 'thumbnail_path', 'name'];

    protected $baseDir = 'uploads/trucking/photos';

    public function truckingDelivery(){

        return $this->belongsTo('App\TruckingDelivery');
    }

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
        $this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir, $this->name);

        return $this;
    }

    public function move(UploadedFile $file){
        $file->move($this->baseDir, $this->name);

        $this->makeThumbnail();

        return $this;
    }

    protected function makeThumbnail(){

        Image::make($this->path)
            ->fit(200)
            ->save($this->thumbnail_path);

        return $this;
    }

    public function delete(){

        \File::delete([

            $this->path,

            $this->thumbnail_path

        ]);

        parent::delete();
    }
}
