<?php

namespace App\Http\Controllers;
use App\Models\Content;
use App\Models\Post;
use Illuminate\Http\Request;

class PostContent extends Controller
{
    public function addPost()
    {
        $post = new Post;
        $post->title= "Hello world";
        $post->short_desc= "Hello world";
        $post->save();
    
        $content = new Content;
        $content->description= 'helllo world post description';
        $content->post_content()->save($content);
    }
    public function index()
    {
        // get post and content from Post Model
        $post = Post::find(1);
        var_dump($post->title);
        var_dump($post->post_content->description);
    
        // get post data from PostContent model
        $post= Content::find(1)->post;
        dd($post);
    
    }
    public function delete()
    {
        $post = Post::find(1);
        $post->delete();
    }

    // public function index() {
    //     return "test route";
    // }
}
