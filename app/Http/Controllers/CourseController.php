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
    }
    public function create()
    {
        return view('create_post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'discription' => ['required'],
            'poster' => ['required','image'],
            'banner' => ['required','image'],
            'status' => ['required'],
        ]);
        $banner_file = $request->file('banner');
        $banner_file_name = $banner_file->getClientOriginalName();
        $banner_file->storeAs('images/banner',$banner_file_name);
        
        $poster_file = $request->file('poster');
        $poster_file_name = $poster_file->getClientOriginalName();
        $poster_file->storeAs('images/poster',$poster_file_name);

        $posts = [
            'title' => $request->title,
            'discription' => $request->tags,
            'poster' => $poster_file_name,
            'banner' => $banner_file_name, 
            'status' => $request->status,
            'slug' => $request->title
        ];
        $posts['teacher_id'] = auth()->user()->id;
        $post = Course::create($posts);
        return redirect()->route('home');
    }
}
