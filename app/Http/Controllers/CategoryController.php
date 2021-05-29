<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function list(){
        $category = Category::all();
        return view('category',compact('category'));
    }

    public function show($slug){
        $category = Category::where('slug',$slug)->first();
        $course = $category->courses;
        return view('category_show',['course'=>$course]);   
    }

    public function index()
    {
        $categories = Category::with('childrenRecursive')->where('sub_category', null)->get();
        // dd($category);
        // dd($categories);
        return view('admin.category.index',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['required','string','max:255','unique:categories'],
            'sub_category' => ['nullable','exists:categories,id'],
        ]);
        Category::create(
            $request->only('title','slug','sub_category')
        );
        return redirect()->route('category.index');
    }
    public function edit(Request $request,$id)
    {
        $categories = Category::with('childrenRecursive')->where('sub_category', null)->get();
        $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category,"categories"=>$categories]);
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $request->validate([
            'title' => ['required','string','max:255'],
            'slug' => ['required','string','max:255',Rule::unique('categories')->ignore($category->id)],
            'sub_category' => ['nullable','exists:categories,id'],
        ]);
        $category->update(
            $request->only(['title','slug','sub_category'])
        );
        return redirect()->route('category.index');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');

    }
}
