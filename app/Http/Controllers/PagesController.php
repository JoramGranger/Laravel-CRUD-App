<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to LSAPP !!'; 
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About LSAPP !!'; 
        return view('pages.about')->with('title', $title);
    }
     
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['voip', 'security', 'cabling']
        );
        return view('pages.services')->with($data);
    }
}
