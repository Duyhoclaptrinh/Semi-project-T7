<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;

class IndexController extends Controller
{
    public function index()
    {
        $audios = Audio::paginate(6);
        return view('index', compact('audios'));
    }
    
    public function search(Request $request){
        $search = $request->keyword;
        $audios = Audio::orderBy('created_at', 'desc');

        if (!empty($search)) {
            $audios = $audios->where('name', 'like', '%'.$search.'%')
            ->orWhere('category', 'like', '%'.$search.'%')
            ->paginate(3);
        } else {
            $audios = $audios->paginate(3);
        }

        return view('audios.list-audio', compact('audios'), ['successMsg'=>'Search resullts for' .$search]);
    }
}