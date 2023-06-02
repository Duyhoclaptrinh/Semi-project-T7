<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class IndexController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(6);
        return view('index', compact('videos'));
    }
    
    public function search(Request $request){
        $search = $request->keyword;
        $videos = Video::orderBy('created_at', 'desc');

        if (!empty($search)) {
            $videos = $videos->where('name', 'like', '%'.$search.'%')
            ->orWhere('category', 'like', '%'.$search.'%')
            ->paginate(3);
        } else {
            $videos = $videos->paginate(3);
        }

        return view('videos.list-video', compact('videos'), ['successMsg'=>'Search resullts for' .$search]);
    }
}