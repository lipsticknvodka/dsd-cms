<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Rate extends Model
{
    //
    use \Venturecraft\Revisionable\RevisionableTrait;

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 250; //Maintain a maximum of 100 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    public function identifiableName(){
        return $this->name;
    }

    protected $dontKeepRevisionOf = array(
        'updated_at',
        'created_at',
//        'deleted_at'
    );

    protected $revisionFormattedFieldNames = array(
//        'name' => 'Company Name',
//        'acct_type' => 'Account Type',
//        'bill_to' => 'Bill To',
    );


    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'account_rates';

    protected $fillable = ['path','name'];

    protected $baseDir = 'uploads/rates';

    public function account() {

        return $this->belongsTo('App\Account');
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
