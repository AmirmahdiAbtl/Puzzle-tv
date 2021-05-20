<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => ['required','string','max:255'],
            'category_parent' => ['string','max:255','nullable'],
        ]);
        $category=new Category;
        if($request->category_parent==null){
            $category->title = $request->category_name;
        }
        else {
            $category->title = $request->category_name;
            $category->sub_category = Category::where('title',$request->category_parent)->get()[0]->id;
        }
        $category->save();
        return redirect()->route('home');
    }

    public function delete($id)
    {   
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('home');
    }

    // public function add_course($id,Request $request)
    // {
    //     $request->validate([
    //         'course_title' => ['required','string','max:255'],
    //     ])
    //     $category=Category::find($id);
    //     $course=Course::where('title',$request->course_title)->get()[0];
    //     $category->course()->attach($course);
    //     return redirect()->route('home');
    // }
}
