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

    public function single($slug){
        $category = Category::where('slug',$slug)->first();
        $course = $category->course;
        dd($course);    
        // $course = Course::where
    }

    public function index()
    {
        $category = Category::with('parentCategory')->paginate();
        // dd($category);
        return view('admin.category.create',['categories' => $category]);
    }
   public function create(){
       
    
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
    return redirect()->back();
   }
   public function edit(Request $request,$id)
    {
        $category = Category::find($id);
        $all = Category::all();  
        return view('category_edit',['category'=>$category,"all"=>$all]);
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
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
