<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['about_title','about_description'];
    public static function updateAboutInfo($request){
        $about = About::find($request->id);
        $about->about_title     =$request->about_title;
        $about->about_description     =$request->about_description;
        $about->save();
    }
}
