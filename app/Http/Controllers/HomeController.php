<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(){

        $course = Course::all();

        return view('index',compact('course'));
    }
}
