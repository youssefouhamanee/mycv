<?php

namespace App\Http\Controllers;

use App\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function create(){
        return view('cv.create');
    }
    public function store(Request $request){
        $this->validate($request , [
                                'img'=>'required|image|nullable|max:1999|mimes:jpg,png,jpeg,gif',
                                     'presentation'=>'required'   ]);
        if($request->hasfile('img')){
        // get  file name an ext
        $fileNamewithex = $request->file('img')->getClientOriginalName();
        // get just file name
        $fileName = pathinfo($fileNamewithex, PATHINFO_FILENAME);
        // get just ext
        $extension = $request->file('img')->getClientOriginalExtension();
        // get Store
        $fileNameTostore= $fileName.'_'.time().'.'.$extension;
        // get Upload
        $path = $request->file('img')->storeAs('public/image', $fileNameTostore);
    }
    $cv = new Cv();
    $cv->presentation = $request->presentation;
    if($request->hasfile('img')){
        $cv->img = $fileNameTostore;
    }
    $cv->save();

    return view('cv.create')->with('success' , 'Add with successfully ');

    }
    
}
