<?php

namespace App\Http\Controllers;
use App\Author;
use App\Gallery;
use App\Home;
use Illuminate\Http\Request;

class GallaryFrontController extends Controller
{
    public function home(){
        return view('front-end.home.home',[
            'homes'     =>Home::find(4)
        ]);
    }
    public function collection(){
        return view('front-end.collection.collection',[
            'images'    =>Gallery::where('publication_status',1)->get()
        ]);
    }
}
