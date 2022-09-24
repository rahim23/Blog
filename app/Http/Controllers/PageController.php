<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
       // $title="Welcome to My Blog";
        return view('Pages.index') ; 
    }
    
    public function about(){
        $title="About Us";      
        return view('Pages.about')->with("title",$title) ; 
    }
    
    public function services(){
        $data = array('title'=>'services',
        'services'=>['Programming', 'Seo','Data Analytics'] );
        return view('Pages.services')->with($data) ; 
    }
    







}
