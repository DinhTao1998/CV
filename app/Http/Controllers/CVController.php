<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thongtin;

class CVController extends Controller
{
    public function getIndex(){

    	return view('detail.index');
    }

    public function getHomepage(){
    	$data = thongtin::paginate(30);

    	return view('shoppage.index',compact('data'));
    }

    public function filterSearch($key) {
    	$data =thongtin::where('gpa','>=',$key)->paginate(40);
    	return view('shoppage.result',compact('data'));
    }
}
