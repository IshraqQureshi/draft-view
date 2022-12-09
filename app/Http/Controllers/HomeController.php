<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $data = array();

    public function __construct(){

        $this->data['title']            = 'Draft View - Headline';    
        $this->data['activeLink']       = 'home';
    }

    public function view(Request $request){

        return view('home', $this->data);

    }
}
