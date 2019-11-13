<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['custom_home_title','custom_home_description','facebook','twitter','instagram','signature','slider_img_1','slider_img_2'];

    public static function updateHomeInfo($request){
        $home = Home::find($request->id);

        $image1 = $request->file('slider_img_1');
           if($image1){
               $imageName1 = str_random('2').$image1->getClientOriginalName();
               $directory1 = "Gallery-image/home-image";
               $image1->move($directory1,$imageName1);
               $home->slider_img_1             = $directory1.'/'.$imageName1;
           }

        $image2 = $request->file('slider_img_2');
           if($image2){
               $imageName2 = str_random('2').$image2->getClientOriginalName();
               $directory2 = "Gallery-image/home-image";
               $image2->move($directory2,$imageName2);
               $home->slider_img_2             = $directory2.'/'.$imageName2;
           }

        $home->custom_home_title        = $request->custom_home_title;
        $home->custom_home_description  = $request->custom_home_description;
        $home->facebook                 = $request->facebook;
        $home->twitter                  = $request->twitter;
        $home->instagram                = $request->instagram;
        $home->signature                = $request->signature;
        $home->save();
    }
}
