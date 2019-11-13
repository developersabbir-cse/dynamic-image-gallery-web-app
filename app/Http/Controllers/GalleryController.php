<?php

namespace App\Http\Controllers;

use App\Cateogory;
use App\Gallery;
use DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addGallery(){
        return view('back-end.gallery.add-gallery',[
            'categories'    =>Cateogory::where('publication_status',1)->get()
        ]);
    }
    public function newGallery(Request $request){
            Gallery::addImageGallery($request);
            return redirect('/gallery/add-gallery')->with('message','Gallery Add Successfully');
    }
    public function manageGallery(){
        return view('back-end.gallery.manage-gallery',[
            'galleries'   =>DB::table('galleries')
                            ->join('cateogories','galleries.category_id','=','cateogories.id')
                            ->select('galleries.*','cateogories.category_name')
                            ->get()
        ]);
    }
    public function editGallery($id){
        return view('back-end.gallery.edit-gallery',[
            'gallery'   =>Gallery::find($id),
            'categories'    =>Cateogory::where('publication_status',1)->get()

        ]);
    }
    public function updateGallery(Request $request){
        Gallery::updateGalleryInfo($request);
        return redirect('/manage-gallery')->with('message', 'Gallery Updated Successfully');
    }
    public function deleteGallery(Request $request){
            Gallery::deleteGalleryInfo($request);
        return redirect('/manage-gallery')->with('message', 'Gallery Deleted Successfully');

    }
}
