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

        $courses = [
            'title' => $request->title,
            'discription' => $request->discription,
            'poster' => $poster_file_name,
            'banner' => $banner_file_name, 
            'status' => $request->status,
            'slug' => $request->title
        ];
        $courses['teacher_id'] = auth()->user()->id;
        $course = Course::create($courses);
        return redirect()->route('home');
    }
    public function edit(Request $request,$id)
    {
        $course = Course::find($id);
        return view('edit_post',['course'=>$course]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $request->validate([
            'title' => ['required','string','max:255'],
            'discription' => ['required'],
            'poster' => ['image'],
            'banner' => ['image'],
            'status' => ['required'],
        ]);
        $data = [
            'title' => $request->title,
            'discription' => $request->discription,
            'status' => $request->status
        ];
        if($request->hasFile('banner')){    
            $file = $request->file('banner');
            $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $file_name = $base_name . "_" . time() . "." . $extension;
            $file->storeAs('images/banner',$file_name);
            $data['banner'] = $file_name;
        }
        if($request->hasFile('poster')){    
            $file = $request->file('poster');
            $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $file_name = $base_name . "_" . time() . "." . $extension;
            $file->storeAs('images/poster',$file_name);
            $data['poster'] = $file_name;
        }
        $course->update($data);
        return redirect()->route('home');
    }

    public function destroy($id)
    {   
        $course = Course::find($id);
        $course->delete();
        return redirect()->back();
    }
}
