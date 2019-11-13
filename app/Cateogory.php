<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cateogory extends Model
{
    protected $fillable = ['category_name','category_description','publication_status'];

    public static function newCategoryInfo($request){
        $cateogries = new Cateogory();
        $cateogries->category_name          = $request->category_name;
        $cateogries->category_description   = $request->category_description;
        $cateogries->publication_status     = $request->publication_status;
        $cateogries->save();
    }

    public static function deleteCategoryInfo($request){
        $category = Cateogory::find($request->id);
        $category->delete();
    }

    public static function updateCategoryInfo($request){
        $categories = Cateogory::find($request->id);

        $categories->category_name          = $request->category_name;
        $categories->category_description   = $request->category_description;
        $categories->publication_status     = $request->publication_status;
        $categories->save();
    }
}
