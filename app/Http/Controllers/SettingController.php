<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('admin.slider.index',compact('courses'));
    }
    public function store(Request $request){
        $setting = Setting::get();
        for ($i = 1; $i < 6; $i++) { 
            if($request->get("slider".$i."_DESC") != $setting[$i-1]->name){
                if(count($setting) >= 5){
                    $setting[$i-1]->update([
                        'name' => $request->get("slider".$i."_DESC"),
                        'value' => $request->get("slider".$i."_CID"),
                    ]);
                }else{
                    Setting::create([
                        'name' => $request->get("slider".$i."_DESC"),
                        'value' => $request->get("slider".$i."_CID"),
                    ]);
                }
            }
            if($request->get("slider".$i."_DESC") == $setting[$i-1]->name && $request->get("slider".$i."_CID") != $setting[$i-1]->value){
                $setting[$i-1]->update([
                    'value' => $request->get("slider".$i."_CID"),
                ]);
            }
        }
    }
}
