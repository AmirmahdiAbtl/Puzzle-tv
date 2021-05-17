<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class CourseController extends Controller
{
    public function index($id){
        $course = Course::with('episode')->find($id);
        $course->increment('views'); 
        return view('post-info',compact('course'));
    }
    
}
