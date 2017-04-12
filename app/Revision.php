<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    //
    use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'revisions';

    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function setRevisionableTypeAttribute($value){



//            $this->attributes['revisionable_type'] = substr(string $string, int $start, int|null $length = null);

        $this->attributes['revisionable_type'] = strtolower($value);

        return $value;


    }


//    protected $revisions = Revision::with('revisionable')->all();

//    public function identifiableName(){
//        return $this->name;
//    }



}
