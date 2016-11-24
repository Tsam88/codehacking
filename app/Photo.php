<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //


    protected $uploads = '/images/';



    protected  $fillable = ['file'];


    //THIS IS AN ACCESSOR FOR THE PHOTO PATH INTO PHOTOS TABLE(file column)
    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }


}
