<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{
    
    public function index(){
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    public function show($slug){
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
        return view('admin.course.create');
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
        
        $file = $request->file('banner');
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $banner_file_name = $base_name . "_" . time() . "." . $extension;
        $file->storeAs('images/banner',$banner_file_name);
        
        $file = $request->file('poster');
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $poster_file_name = $base_name . "_" . time() . "." . $extension;
        $file->storeAs('images/poster',$poster_file_name);
    
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
        $all_course = Course::all();
        return view('admin.course.store',['courses' => $all_course]);
    }

    public function edit(Request $request,$id)
    {
        $course = Course::find($id);
        return view('admin.course.edit',['course'=>$course]);
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

            Storage::delete('images/banner/'.$course->banner);
            
            $file = $request->file('banner');
            $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $file_name = $base_name . "_" . time() . "." . $extension;
            $file->storeAs('images/banner',$file_name);
            $data['banner'] = $file_name;
        }
    
        if($request->hasFile('poster')){  

            Storage::delete('images/poster/'.$course->poster);
            
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

    public function delete($id)
    {   
        $course = Course::find($id);
        
        Storage::delete('images/poster/'.$course->poster);
        Storage::delete('images/banner/'.$course->banner);

        $course->delete();
        return redirect()->route('home');
    }

    public function add_category($id,Request $request)
    {
        $request->validate([
            'category_title' => ['required','string','max:255'],
        ]);
        $category=Category::where('title',$request->category_title)->get()[0];
        $course=Course::find($id);
        $category->course()->attach($course);
        return redirect()->route('home');
    }
}
