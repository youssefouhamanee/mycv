<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;

class PageController extends Controller
{
    public function index(){
        $cv = Cv::all();
        return view('pages.index')->with('cv',$cv);
    }
}
