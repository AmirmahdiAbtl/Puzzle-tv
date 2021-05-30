<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('setting_manager',compact('courses'));
    }
    public function store(Request $request){
        for ($i=1; $i < 6 ; $i++) { 
            if($request->get('name'.$i) && $request->get('value'.$i)){
                Setting::firstOrCreate(
                    [ 
                        'name' => $request->get('name'.$i),
                        'value' => $request->get('value'.$i)
                     ]
                );
                $change = explode('-',$request->get('name'.$i))[1];
                $attribute = Setting::where('name','LIKE',"%$change%")->get();
                if ($change == 'slider' && count($attribute) > 5){
                    $attribute->first()->delete();
                }
            }
        }
    }
}
