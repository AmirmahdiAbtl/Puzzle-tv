<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class CourseController extends Controller
{
    public function index($slug){
        $course = Course::with(['seasons'])->where('slug',$slug)->first();
        return view('post-info',compact('course'));
    }
    public function player($slug,$seasonId,$episode){
        $course = Course::with('seasons')->where('slug' ,$slug)->first();
        $season = $course->seasons->where('id',$seasonId)->first();
        $ep = $season->episodes->where('slug',$episode)->first();
        dd($ep);
        // $seasons = $course->seasons->where('');
        // $episode = $course->seasons->episodes->where("slug" ,$episede);
        // dd($course->seasons->);
    }
    
}
