<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Video;

class VideoController extends Controller
{
    //
    public function listVideo()
    {
        $videos = Video::paginate(3);
        return view('videos.list-video', compact('videos'));
    }

    public function add()
    {
        return view('videos.add');
    }

    public function store(Request $request)
    {
        
        if ($request->isMethod('POST')){
            
            $newVideo = new Video();
            $newVideo->name = $request->name;
            $newVideo->video_url = $request->video_url;
            $newVideo->description = $request->description;
            $newVideo->category = $request->category;
            $newVideo->save();
            return redirect() ->route('management')
            -> with('success', 'Video created successfully');
        }
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view('videos.update', ['video' => $video]);
    }

    public function update(Request $request)
    {
        if ($request->isMethod('POST')){
            $video = Video::find($request->input('id'));
            if ($video != null) {
                $video->name = $request->name;
                $video->video_url = $request->video_url;
                $video->description = $request->description;
                $video->category = $request->category;
                $video->save();    
                return redirect() ->route('management')
                -> with('success', 'Video updated successfully');
            }
            else
            {
                return redirect() ->route('management')
                -> with('Error', 'Video not update');
            }
        }
        
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect()->route('management')
        ->with('success', 'Video deleted successfully');
    }
}