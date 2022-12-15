<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public $data = array();

    public function __construct(){

        $this->data['title']            = 'About Us - Draft View';    
        $this->data['activeLink']       = 'aboutUs';
    }

    public function aboutUs(Request $request){

        return view('about-us', $this->data);

    }
}
