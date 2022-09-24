<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
       // $title="Welcome to My Blog";
        return view('pages.index') ; 
    }
    
    public function about(){
        $title="About Us";      
        return view('pages.about')->with("title",$title) ; 
    }
    
    public function services(){
        $data = array('title'=>'services',
        'services'=>['Programming', 'Seo','Data Analytics'] );
        return view('pages.services')->with($data) ; 
    }
    







}
