<?php

namespace App\Http\Controllers;

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
}
