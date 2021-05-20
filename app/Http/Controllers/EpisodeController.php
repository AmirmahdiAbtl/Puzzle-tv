<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use Storage;

class EpisodeController extends Controller
{
    public function create($id,$season_id)
    {
        return view('create_episode',['id'=>$id,'season_id'=>$season_id]);
    }

    public function store($id,$season_id,Request $request)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'file' => ['required','file'],
            'freeable' => ['required'],
        ]);
        
        $file = $request->file('file');
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $file_name = $base_name . "_" . time() . "." . $extension;
        $file->storeAs('videos',$file_name);
    
        $episode= new Episode;
        $episode->title = $request->title;
        $episode->file = $file_name;
        $episode->freeable = $request->freeable;
        $episode->slug = $request->title;
        
        //episode number need edit
        $episode->episode_number=1;
    
        $episode->season_id= $season_id;

        $episode->save();
        return redirect()->route('home');
    }

    public function delete($id,$season_id,$ep_id)
    {   
        $episode = Episode::find($ep_id);
        $episode->delete();
        return redirect()->route('home');
    }
}
