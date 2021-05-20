<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class SeasonController extends Controller
{
    public function create($id)
    {
        return view('create_season',['id'=>$id]);
    }
    public function store($id,Request $request)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
        ]);
        $season=new Season;
        $season->title = $request->title;
        $season->course_id = $id;
        $season->save();
        return redirect()->route('home');
    }

    public function delete($id,$season_id)
    {   
        $season = Season::find($season_id);
        $season->delete();
        return redirect()->route('home');
    }
}
