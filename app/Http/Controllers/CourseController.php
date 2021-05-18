<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class CourseController extends Controller
{
    public function index($slug){
        $course = Course::with(['seasons'])->where('slug',$slug)->first();
        // $course->increment('views');
        // dd($course->seasons->episodes);
        return view('post-info',compact('course'));
    }
    
}
