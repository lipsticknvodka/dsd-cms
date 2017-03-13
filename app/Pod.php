<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Pod extends Model
{
    //
    protected $dates = ['deleted_at'];

    protected $table = 'pod_trucking_deliveries';

    protected $fillable = ['path', 'name'];

    protected $baseDir = 'uploads/trucking/pod';

    public function truckingDelivery() {

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
