<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('posts.index',[
            'posts'=>$posts
        ]);
    }


    public function newPostIndex()
    {

        return view('admin.newPost');
    }


    public function store(Request $request)
    {
       
    }

    public function destroy(Post $post)
    {
         $post->delete();
        return back();
    }
}
