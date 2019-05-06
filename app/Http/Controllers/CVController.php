<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function getIndex(){

    	return view('detail.index');
    }

    public function getHomepage(){

    	return view('shoppage.index');
    }
}
