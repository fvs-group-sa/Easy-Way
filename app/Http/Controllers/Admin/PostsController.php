<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('admin.posts',[
            'posts'=>$posts
        ]);
    }

    public function store(Request $request)
    {
         
        $this->validate($request, [
            'body' => 'required',
            'title' => 'required'
        ]);

        // $request->user()->   you can use this to grab the current authenticated user as well
        
        // you can use this if you want to
        $posts = new Post([
            //Larvel will automatically fill in user_id
            'body'=>$request->body,
            'title'=>$request->title,
            'image'=>$request->image
        ]);

        $posts->save();

        return view('admin.posts');
    }


    public function destroy(Post $post)
    {
         $post->delete();
        return back();
    }
}
