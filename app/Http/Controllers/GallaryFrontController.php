<?php

namespace App\Http\Controllers;

use App\About;
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
    public function aboutMe(){
        return view('front-end.about.about',[
            'about'     =>About::find(1)
        ]);
    }
}
