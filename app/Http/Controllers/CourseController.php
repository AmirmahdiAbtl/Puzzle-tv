<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;


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
        return view('player',compact('ep'));
    }
   
    public function create()
    {
        $categories = Category::with('childrenRecursive')->where('sub_category', null)->get();

        return view('admin.course.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
       $request->validate([
            'title' => ['required','string','max:255'],
            'discription' => ['required'],
            'poster' => ['required','image'],
            'banner' => ['required','image'],
            'status' => ['required'],
        ]);
    
        $banner_file = $request->file('banner');
        $base_banner_name = pathinfo($banner_file->getClientOriginalName(), PATHINFO_FILENAME);
        $banner_extension = $banner_file->getClientOriginalExtension();
        $banner_file_name = $base_banner_name . "_" . time() . "." . $banner_extension;
        $banner_file->storeAs('images/banner',$banner_file_name,'public_file');

        $poster_file = $request->file('poster');
        $base_poster_name = pathinfo($poster_file->getClientOriginalName(), PATHINFO_FILENAME);
        $poster_extension = $poster_file->getClientOriginalExtension();
        $poster_file_name = $base_poster_name . "_" . time() . "." . $poster_extension;
        $poster_file->storeAs('images/poster',$poster_file_name,'public_file');


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
        $course->giveCategoriesTo($request->categories);

        return redirect()->route('course.index')->with('success', true);
    }

    public function edit(Request $request,$id)
    {
        $categories = Category::get();
        $course = Course::find($id);
        $array = $course->category->pluck('id')->toArray();
        return view('admin.course.edit',['course'=>$course, 'categories' => $categories,'array' => $array]);
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
            $file->storeAs('images/banner',$file_name,'public_file');
            $data['banner'] = $file_name;
        }
        if($request->hasFile('poster')){    
            Storage::delete('images/poster/'.$course->poster);
            $file = $request->file('poster');
            $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $file_name = $base_name . "_" . time() . "." . $extension;
            $file->storeAs('images/poster',$file_name,'public_file');
            $data['poster'] = $file_name;
        }
        // $categoryId = Category::whereIn('title',$request->categories)->get()->pluck('id')->toArray();
        $course->update($data);
        // $course->category()->sync($categoryId);
        $course->giveCategoriesTo($request->categories);
        return redirect()->route('home');
    }

    public function destroy($id)
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
