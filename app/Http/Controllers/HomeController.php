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

        $sliderList = [1,2,3,4,5];
        $sliderDESC = Setting::whereIn('id',$sliderList)->get();
        $sliderCID = $sliderDESC->pluck('value');
        $sliderCourse = Course::whereIn('id',$sliderCID)->get();

        return view('index',[
            'course' => $course,
            'dbvalue' => $sliderDESC,
            'slider' => $sliderCourse
        ]);
    }
    
}
