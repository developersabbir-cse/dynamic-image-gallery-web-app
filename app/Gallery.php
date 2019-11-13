<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Gallery extends Model
{
    protected $fillable = ['category_id','image_title','image_description','gallery_image','publication_status'];

    public static function addImageGallery($request){
        $image =$request->file('gallery_image');
        $imageName =str_random('2').$image->getClientOriginalName();
        $directory ="Gallery-image";
        $image->move($directory,$imageName);

        $gallery = new Gallery();
        $gallery->category_id           = $request->category_id;
        $gallery->image_title           = $request->image_title;
        $gallery->image_description     = $request->image_description;
        $gallery->gallery_image         = $directory.'/'.$imageName;
        $gallery->publication_status    = $request->publication_status;
        $gallery->save();
    }
    public static function updateGalleryInfo($request){
        $gallery = Gallery::find($request->id);
        $image = $request->file('gallery_image');

        if($image){
            $imageName = str_random('2') . $image->getClientOriginalName();
            $directory = "Gallery-image";
            unlink($gallery->gallery_image);
            $image->move($directory, $imageName);
            $gallery->gallery_image         = $directory . '/' . $imageName;
        }


        $gallery->category_id           = $request->category_id;
        $gallery->image_title           = $request->image_title;
        $gallery->image_description     = $request->image_description;
        $gallery->publication_status    = $request->publication_status;
        $gallery->save();
    }
    public static function deleteGalleryInfo($request){
        $gallery = Gallery::find($request->id);
        unlink($gallery->gallery_image);
        $gallery->delete();
    }
}
