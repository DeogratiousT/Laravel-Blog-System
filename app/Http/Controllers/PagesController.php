<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'TEDDIUS';
        return view('pages.index')->with('title', $title);
    }
     
    public function about(){
        $title = 'About Me';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title'=>'Services Offered',
            'services'=> ['Programming', 'Search Engine Optimisation','Web Design']
        );
        return view('pages.services')->with($data);
    }
}
