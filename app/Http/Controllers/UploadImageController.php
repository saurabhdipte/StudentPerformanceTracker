<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    // public function index(){
    //     return view('home.mentor',['images'=>Image::get()]);
    // }

    public function uploadCourse(Request $request){
        // dd($request->file('profile-course')->getClientOriginalName());
        $image = $request->file('profile-course');

        $name = $image->getClientOriginalName();

        $image->storeAs('public/courses/',$name);

        $image_save=new Image;
        $image_save->name=$name;
        $image_save->save();

        return back();
    }

    public function uploadInternship(Request $request){
        // dd($request->file('profile-course')->getClientOriginalName());
        $image = $request->file('profile-internship');

        $name = $image->getClientOriginalName();

        $image->storeAs('public/courses/',$name);

        $image_save=new Image;
        $image_save->name=$name;
        $image_save->save();

        return back();
    }
}
