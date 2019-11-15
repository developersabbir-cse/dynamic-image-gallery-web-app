<?php

namespace App\Http\Controllers;
use App\About;
use App\Author;
use App\Home;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function customHome(){
        return view('back-end.pages.home',[
            'home'  =>Home::find(4)
        ]);
    }
    public function updateHome(Request $request){
        Home::updateHomeInfo($request);
        return redirect('/custom-home')->with('message','Home Info Updated Successfully');
    }
    public function authorInfo(){
        return view('back-end.users.add-author-info',[
            'author'    => Author::find(1)
        ]);
    }
    public function newAuthor(Request $request){
        Author::newAuthorInfo($request);
        return redirect('author-info')->with('message','Author Updated successfully');
    }
    public function aboutMe(){
        return view('back-end.pages.about-me',[
            'about' =>About::find(1)
        ]);
    }
    public function updateAbout(Request $request){
        About::updateAboutInfo($request);
        return redirect('about-me')->with('message','About info successfully updated');
    }
}
