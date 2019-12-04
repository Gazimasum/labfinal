<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Image;

class PagesController extends Controller
{
    public function index($id)
    {
    	$student = Student::find($id);
    	return view('studentview',compact('student'));
    }

    public function change(Request $r,$id)
    {
    	      

                $image=$r->image;
             // $image= $request->file('user_image');
              $img=time().'.'.$image->getClientOriginalExtension();
              $image_resize = Image::make($image->getRealPath());
              $image_resize->resize(200, null, function ($constraint) {
 			   $constraint->aspectRatio();
						});

              $image_resize->save(public_path('img/' .$img));
               $student = Student::find($id);
                       
              $student->profile_image = $img;
              $student->save();
              return back();
    }
}
