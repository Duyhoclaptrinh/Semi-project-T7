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
use App\Models\Audio;

class AudioController extends Controller
{
    //
    public function listAudio()
    {
        $audios = Audio::paginate(3);
        return view('audios.list-audio', compact('audios'));
    }

    public function add()
    {
        return view('audios.add');
    }

    public function store(Request $request)
    {
        
        if ($request->isMethod('POST')){
            
            $newAudio = new Audio();
            $newAudio->name = $request->name;
            $newAudio->audio_url = $request->audio_url;
            $newAudio->description = $request->description;
            $newAudio->category = $request->category;
            $newAudio->save();
            return redirect() ->route('management')
            -> with('success', 'Audio created successfully');
        }
    }

    public function edit($id)
    {
        $audio = Audio::find($id);
        return view('audios.update', ['audio' => $audio]);
    }

    public function update(Request $request)
    {
        if ($request->isMethod('POST')){
            $audio = Audio::find($request->input('id'));
            if ($audio != null) {
                $audio->name = $request->name;
                $audio->audio_url = $request->audio_url;
                $audio->description = $request->description;
                $audio->category = $request->category;
                $audio->save();    
                return redirect() ->route('management')
                -> with('success', 'Audio updated successfully');
            }
            else
            {
                return redirect() ->route('management')
                -> with('Error', 'Audio not update');
            }
        }
        
    }

    public function destroy($id)
    {
        $audio = Audio::find($id);
        $audio->delete();
        return redirect()->route('management')
        ->with('success', 'Audio deleted successfully');
    }
}
