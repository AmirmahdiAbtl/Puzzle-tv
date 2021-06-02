<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Episode;
use App\Models\Season;
use Illuminate\Support\Facades\Storage;

class EpisodeController extends Controller
{
    public function index($id)
    {
        $course=Course::find($id);
        $episodes=$course->episodes()->get();
        return view('admin.episode.index',['episodes'=>$episodes, 'course' => $course]);
    }
    
    public function create($id)
    {
        $course = Course::with(['seasons','episodes'])->withCount(['seasons','episodes'])->find($id);
        return view('admin.episode.create',['course' => $course]);
    }

    public function store(Request $request,$id)
    {
        // dd($request->all());
        $course = Course::with('episodes')->withCount(['seasons','episodes'])->find($id);
        $validation = $request->validate([
            'title' => 'required|max:255|string',
            'slug' => 'required|max:255|string',
            'video' => 'required',
            'status' => 'required',
            'season_id' => 'required'
        ]);

        if ($request->season_id == 0 ) {
            $request->season_id=  $course->seasons->count() + 1;
        }
        
        $season_id = $request->season_id;

        if($request->season_title){
            $season = Season::create([
                'title' => $request->season_title,
                'course_id' => $course->id
            ]);
            $season_id = $season->id;
        }

        $episode_file = $request->file('video');
        $base_episode_name = pathinfo($episode_file->getClientOriginalName(), PATHINFO_FILENAME);
        $episode_extension = $episode_file->getClientOriginalExtension();
        $episode_file_name = $base_episode_name . "_" . time() . "." . $episode_extension;
        $episode_file->storeAs('video/episode',$episode_file_name,'public_file');


        Episode::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'video' => $episode_file_name,
            'status' => $request->status,
            'season_id' => $season_id,
            'course_id' => $course->id,
            'episode_number' => $course->episodes_count + 1
        ]);
        return redirect()->back();
    }

    public function edit($slug)
    {
        $episode = Episode::where('slug' ,$slug)->first();
        return view('admin.episode.edit',compact('episode'));
    }

    public function update(Request $request, $slug)
    {
        $episode = Episode::where('slug',$slug)->first();
        $validation = $request->validate([
            'title' => 'required|max:255|string',
            'slug' => 'required|max:255|string',
            'status' => 'required',
            'season_id' => 'required'
        ]);
        
        if ($request->season_id == 0 ) {
            $request->season_id=  $episode->course->seasons->count() + 1;
        }

        $season_id = $request->season_id;
        $course = $episode->course;

        if($request->season_title){
            $season = Season::create([
                'title' => $request->season_title,
                'course_id' => $course->id
            ]);
            $season_id = $season->id;
        }

        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'freeable' => $request->status,
            'season_id' => $season_id
        ];
        if($request->hasFile('video')){    
            Storage::delete('video/episode/'.$episode->video);
            $file = $request->file('video');
            $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $file_name = $base_name . "_" . time() . "." . $extension;
            $file->storeAs('video/episode',$file_name,'public_file');
            $data['video'] = $file_name;
        }
        $episode->update($data);
        return redirect()->back();
    }

    public function destroy($slug)
    {
        $episode = Episode::where('slug',$slug)->first();
        $season = $episode->season;
        if($season->episodes->count() == 1){
            $season->delete();
        }
        $episode->delete();
        return redirect()->back();
    }
}
