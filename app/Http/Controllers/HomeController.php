<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index(){

        $course = Course::all();

        $dbvalue = Setting::where('name',"LIKE",'%slider%')->get();
        $dbId = Setting::pluck('value');
        $slider = Course::whereIn('id',$dbId)->get();
        
        return view('index',compact('course','dbvalue','slider'));
    }
    
}
