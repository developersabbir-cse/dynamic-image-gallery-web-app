<?php

namespace App\Http\Controllers;

use App\Cateogory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addImageCategory(){
        return view('back-end.category.add-category');
    }
    public function newCategory(Request $request){
            Cateogory::newCategoryInfo($request);
            return redirect('/category/add-image-category')->with('message','Category add Successfully');
    }
    public function manageCategory(){
        return view('back-end.category.manage-category',[
            'categories' => Cateogory::all()
        ]);
    }
    public function deleteCategory(Request $request){
        Cateogory::deleteCategoryInfo($request);
        return redirect('/category/manage-image-category')->with('message','Category Deleted Successfully');

    }
    public function editCategory($id){
        return view('back-end.category.edit-category',[
            'category'  =>Cateogory::find($id)
        ]);
    }
    public function updateCategory(Request $request){
        Cateogory::updateCategoryInfo($request);
        return redirect('/category/manage-image-category')->with('message','Category Updated Successfully');

    }
}
