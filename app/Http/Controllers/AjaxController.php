<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class AjaxController extends Controller
{
    public function index($id){
        $course = Course::find($id);
        return $course;
    }
}
