<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function AddPages(){

    	return view('back.pages.pages');
    }
}
